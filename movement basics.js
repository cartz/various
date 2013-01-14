-- The Adventure of Princess Girl

-- Use this function to perform your initial setup
function setup()
    spx = 250 -- Spritey x
    spy = 400 -- Spritey y
    sph = 101 -- Spritey height
    spw = 171 -- Spritey widt
    watchstuff()
end


-- This function gets called once every frame
function draw()
    -- This sets a dark background color 
    background(79, 102, 173, 0)
    -- sprite("SpaceCute:Background",374,374)
    spx = spx + Gravity.x
    -- This makes the sprite move horizontal
    -- iPad movement tells the way
    spy = spy + Gravity.y
    -- This makes the sprite move vertical
    -- iPad movement tells the way
    -- sph = sph + Gravity.x -- Gravity sets the height
    -- spw = spw + Gravity.y -- Gravity sets the width
    -- this makes the sprite grow and shrink
    sprite("Planet Cute:Character Princess Girl",spx,spy,sph,spw)
    -- The position is set by spx and spy   
end


function touched(touch)
    spx = touch.x
    spy = touch.y
end


function watchstuff()
    watch("spx")
    watch("spy")
end