register_post_type('mein-eigener-post-type',array(
 'labels' => array( // Labels sind die Beschriftungen im Administrationsbereich
   'name' => 'Inhalte', // Post Types (Plural)
   'singular_name' => 'Inhalt', // Post Type (Singular)
   'add_new' => 'Neu', // Neu hinzufügen
   'add_new_item' => 'Neuen Inhalt hinzufügen, // Neuen Post Type Inhalt hinzufügen
   'edit_item' => 'Inhalt bearbeiten', // Post Type Inhalt bearbeiten
   'new_item' => 'Neuer Inhalt', // Neuer Post Type Inhalt
   'all_items' => 'Alle Inhalte', // Alle Inhalte des Post Types
   'view_item' => 'Inhalt anzeigen', // Post Type Inhalt anzeigen
   'search_items' => 'Inhalte suchen', // Nach Post Type Inhalten suchen
   'not_found' => 'Keine Inhalte gefunden', // keine Einträge gefunden
   'not_found_in_trash' => 'Keine Inhalte im Papierkorb', // Text für den leeren Papierkorb
   'parent_item_colon' => '',
   'menu_name' => 'Post Type Inhalt' // Wird im Adminmenü als Name angezeigt
 ),
 'public' => true, // Öffentlich zugänglich
 'publicly_queryable' => true,
 'show_ui' => true, // Im Administrationsbereich anzeigen
 'show_in_menu' => true, // Im Menü anzeigen
 'query_var' => true, // Für eigene Querys zugänglich machen
 'rewrite' => array( 'slug' => 'book' ), // URL-Slug umschreiben
 'capability_type' => 'post', // Rechte-Einstellungen vererben von anderem Post Types
 'has_archive' => true, // Ein Archiv darf angezeigt werden
 'hierarchical' => false, // Darf Unterseiten haben
 'menu_position' => null, // Positionierung im Menü
 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ) // Unterstützte Editor Möglichkeiten
));

http://codex.wordpress.org/Function_Reference/register_post_type