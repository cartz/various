
alias -l rawurlencode {
  return $regsubex($1-,/\G(.)/g,$iif(\t !isalnum && \t !isin -_.,$chr(37) $+ $base($asc(\t),10,16,2),\t))
}

alias -l urlencode {
  return $replace($rawurlencode($1-),$+($chr(37),20),+)
}
alias ungoo.gl hfree GglShrt
alias g.logo return 2G4o7o2g3l4e URL Shortener


alias goo.gl {
  if (!$hget(GglShrt,output)) { hadd -mu40 GglShrt output echo $color(normal) -ati2 * }
  if (!$1) { $hget(GglShrt,output) $g.logo error: insufficient parameters | ungoo.gl | halt }
  if ($sock(googleshort)) { $hget(GglShrt,output) $g.logo error: socket in use | ungoo.gl | halt }

  var %s $1, %r /(?:^|[][()<>{}'"\s])((?:(?:irc|s?ftp|https?:)\/\/|www\d*\.)[^\s./]+\.(?:\[\S*?]|\(\S*?\)|\{\S*?}|[^][()<>{}'"\s]|['"](?!\s|$|[()\[\]<>]))++)/giS
  if (!$regex(%s,%r)) { $hget(GglShrt,output) $g.logo error: invalid URL format | ungoo.gl | halt }

  sockopen googleshort goo.gl 80
  sockmark googleshort $1
}

on *:sockopen:googleshort:{
  var %s sockwrite -tn $sockname
  var %p = url= $+ $urlencode($sock($sockname).mark) $+ &security_token=null, %clen = $len(%p)
  %s POST /api/shorten HTTP/1.1
  %s Host: goo.gl
  %s User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)
  %s Connection: close
  %s X-Auth-Google-Url-Shortener: true
  %s Content-Type: application/x-www-form-urlencoded;charset=utf-8
  %s Content-Length: %clen
  %s $crlf
  %s %p
}

on *:sockread:googleshort:{
  var %g
  sockread %g
  if ($regex(%g,/Location:\s(.+)/)) {
    $hget(GglShrt,output) $g.logo $+ :12 $sock($sockname).mark <->12 $regml(1)
    sockclose $sockname
    ungoo.gl
    halt
  }
}
on *:text:!goo.gl &:#:{
  if (!$hget(GglShrt,output)) { hadd -mu40 GglShrt output msg # }
  goo.gl $2
}