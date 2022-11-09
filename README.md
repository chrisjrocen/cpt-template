# cpt-template
A Template for creating a Custom Post Type in WordPress

The following example registers a new post type, Products, which is identified in the database as cpt_product.

**Warning:** You must call ```Php register_post_type()``` before the ```Php admin_init``` hook and after the ```Php after_setup_theme``` hook. A good hook to use is the ```Php init``` action hook.

## Naming Best Practices

Always prefix your post type functions and identifiers with a short prefix that corresponds to your plugin, theme, or website. If your identifier is too generic (for example: “product“), it may conflict with other plugins or themes that have chosen to use that same identifier.

**Note:** Solving duplicate post type identifiers is not possible without disabling one of the conflicting post types.


**Warning:** 

1. Your custom post type identifier should not exceed 20 characters
1. To ensure forward compatibility, do not use wp_ as your identifier — it is being used by WordPress core.

