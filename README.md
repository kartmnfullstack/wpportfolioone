# Custom WordPress Template: Dynamic Bootstrap Carousel

A custom, single-file WordPress page template built for the Astra theme ecosystem. This project demonstrates how to query the WordPress database dynamically and render data inside a responsive Bootstrap carousel without relying on bloated, heavy page-builder plugins. 

Built as a core piece of my professional development portfolio to showcase custom loop handling and data fetching.

## 🚀 Key Learning Objectives & Features
* **Dynamic WP_Query Loop:** Replaces hardcoded UI elements by pulling recent posts directly from the WordPress database.
* **Separation of Concerns:** Collects query results cleanly into a structured PHP array before rendering them to the user interface.
* **Self-Contained Architecture:** Developed as a single, portable template file (`page-custom-portfolio.php`) for seamless drop-in deployment into any Astra child theme.
* **Data Integrity:** Implements proper post data resetting (`wp_reset_postdata()`) to ensure custom queries do not interfere with global theme elements.
* **Bootstrap Customisation:** Blends native Bootstrap utilities with existing WordPress CSS classes to deliver a tailored, performance-focused layout.

## 🛠️ The Core Logic (WP_Query)
This snippet highlights the database-to-UI collection engine running inside the template:

```php
/* Template Name: Page Development for Portfolio */

\$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 4
);

\$q = new WP_Query(\(args);\)posts_array = array();

if (\$q->have_posts()) {
    while (\$q->have_posts()) {
        \(q->the_post();\)posts_array[] = array(
            'title'     => get_the_title(),
            'excerpt'   => wp_trim_words(get_the_excerpt(), 15),
            'thumb_url' => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : ''
        );
    }
    wp_reset_postdata(); // Ensures global query safety
}
```

## ⚙️ Installation & Usage Instructions

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/kartmnfullstack/wpportfolioone.git
   cd wpportfolio1
   ```
2. **Move the Template:** 
   Copy the `page-custom-portfolio.php` file directly into your active Astra Child Theme folder (`wp-content/themes/your-child-theme/`).
3. **Select the Template:** 
   Log into the WordPress dashboard, create or edit a page, and select **Page Development for Portfolio** from the Template dropdown block settings.
4. **Add Page Content:** 
   Add content dynamically using the standard Gutenberg editor block layout.
5. **View Content Delivery:**
   The custom Bootstrap post slider will render sequentially below the Gutenberg content blocks as defined in the template structure.
