module.exports = {
  content: [
    "./src/**/*.{html,js,ts,jsx,tsx}",
    "app/**/*.{ts,tsx}",
    "components/**/*.{ts,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        "admin-icon-1": "var(--admin-icon-1)",
        "admin-icon-select": "var(--admin-icon-select)",
        "admin-stroke-stroke": "var(--admin-stroke-stroke)",
        "admin-surface-surface": "var(--admin-surface-surface)",
        "admin-text-brand": "var(--admin-text-brand)",
        "admin-text-green": "var(--admin-text-green)",
        "admin-text-icon": "var(--admin-text-icon)",
        "admin-text-icon-content": "var(--admin-text-icon-content)",
        "admin-text-secondary": "var(--admin-text-secondary)",
        "admin-text-title": "var(--admin-text-title)",
        "blackblack-100": "var(--blackblack-100)",
        "blackblack-200": "var(--blackblack-200)",
        "blackblack-300": "var(--blackblack-300)",
        "blackblack-400": "var(--blackblack-400)",
        "blackblack-50": "var(--blackblack-50)",
        "blackblack-500": "var(--blackblack-500)",
        "blackblack-600": "var(--blackblack-600)",
        "blackblack-700": "var(--blackblack-700)",
        "blackblack-800": "var(--blackblack-800)",
        "blackblack-900": "var(--blackblack-900)",
        "blackblack-950": "var(--blackblack-950)",
        "blue-violetblue-violet-100": "var(--blue-violetblue-violet-100)",
        "blue-violetblue-violet-200": "var(--blue-violetblue-violet-200)",
        "blue-violetblue-violet-300": "var(--blue-violetblue-violet-300)",
        "blue-violetblue-violet-400": "var(--blue-violetblue-violet-400)",
        "blue-violetblue-violet-50": "var(--blue-violetblue-violet-50)",
        "blue-violetblue-violet-500": "var(--blue-violetblue-violet-500)",
        "blue-violetblue-violet-600": "var(--blue-violetblue-violet-600)",
        "blue-violetblue-violet-700": "var(--blue-violetblue-violet-700)",
        "blue-violetblue-violet-800": "var(--blue-violetblue-violet-800)",
        "blue-violetblue-violet-900": "var(--blue-violetblue-violet-900)",
        "blue-violetblue-violet-950": "var(--blue-violetblue-violet-950)",
        "colors-apple-100": "var(--colors-apple-100)",
        "colors-apple-200": "var(--colors-apple-200)",
        "colors-apple-300": "var(--colors-apple-300)",
        "colors-apple-400": "var(--colors-apple-400)",
        "colors-apple-50": "var(--colors-apple-50)",
        "colors-apple-500": "var(--colors-apple-500)",
        "colors-apple-600": "var(--colors-apple-600)",
        "colors-apple-700": "var(--colors-apple-700)",
        "colors-apple-800": "var(--colors-apple-800)",
        "colors-apple-900": "var(--colors-apple-900)",
        "colors-apple-950": "var(--colors-apple-950)",
        "colors-black-100": "var(--colors-black-100)",
        "colors-black-200": "var(--colors-black-200)",
        "colors-black-300": "var(--colors-black-300)",
        "colors-black-400": "var(--colors-black-400)",
        "colors-black-50": "var(--colors-black-50)",
        "colors-black-600": "var(--colors-black-600)",
        "colors-black-700": "var(--colors-black-700)",
        "colors-black-800": "var(--colors-black-800)",
        "colors-black-900": "var(--colors-black-900)",
        "colors-cinnabar-100": "var(--colors-cinnabar-100)",
        "colors-cinnabar-200": "var(--colors-cinnabar-200)",
        "colors-cinnabar-300": "var(--colors-cinnabar-300)",
        "colors-cinnabar-400": "var(--colors-cinnabar-400)",
        "colors-cinnabar-50": "var(--colors-cinnabar-50)",
        "colors-cinnabar-500": "var(--colors-cinnabar-500)",
        "colors-cinnabar-600": "var(--colors-cinnabar-600)",
        "colors-cinnabar-700": "var(--colors-cinnabar-700)",
        "colors-cinnabar-800": "var(--colors-cinnabar-800)",
        "colors-cinnabar-900": "var(--colors-cinnabar-900)",
        "colors-cinnabar-950": "var(--colors-cinnabar-950)",
        "colors-electric-violet-100": "var(--colors-electric-violet-100)",
        "colors-electric-violet-50": "var(--colors-electric-violet-50)",
        "colors-electric-violet-600": "var(--colors-electric-violet-600)",
        "colors-electric-violet-700": "var(--colors-electric-violet-700)",
        "colors-lavender-magenta-100": "var(--colors-lavender-magenta-100)",
        "colors-lavender-magenta-200": "var(--colors-lavender-magenta-200)",
        "colors-lavender-magenta-300": "var(--colors-lavender-magenta-300)",
        "colors-lavender-magenta-400": "var(--colors-lavender-magenta-400)",
        "colors-lavender-magenta-50": "var(--colors-lavender-magenta-50)",
        "colors-lavender-magenta-500": "var(--colors-lavender-magenta-500)",
        "colors-lavender-magenta-600": "var(--colors-lavender-magenta-600)",
        "colors-lavender-magenta-700": "var(--colors-lavender-magenta-700)",
        "colors-lavender-magenta-800": "var(--colors-lavender-magenta-800)",
        "colors-lavender-magenta-900": "var(--colors-lavender-magenta-900)",
        "colors-lavender-magenta-950": "var(--colors-lavender-magenta-950)",
        "colors-neon-carrot-100": "var(--colors-neon-carrot-100)",
        "colors-neon-carrot-200": "var(--colors-neon-carrot-200)",
        "colors-neon-carrot-400": "var(--colors-neon-carrot-400)",
        "colors-neon-carrot-50": "var(--colors-neon-carrot-50)",
        "colors-neon-carrot-500": "var(--colors-neon-carrot-500)",
        "colors-neon-carrot-600": "var(--colors-neon-carrot-600)",
        "colors-neon-carrot-700": "var(--colors-neon-carrot-700)",
        "colors-neon-carrot-800": "var(--colors-neon-carrot-800)",
        "colors-neon-carrot-900": "var(--colors-neon-carrot-900)",
        "colors-neon-carrot-950": "var(--colors-neon-carrot-950)",
        "colors-picton-blue-100": "var(--colors-picton-blue-100)",
        "colors-picton-blue-200": "var(--colors-picton-blue-200)",
        "colors-picton-blue-300": "var(--colors-picton-blue-300)",
        "colors-picton-blue-400": "var(--colors-picton-blue-400)",
        "colors-picton-blue-50": "var(--colors-picton-blue-50)",
        "colors-picton-blue-500": "var(--colors-picton-blue-500)",
        "colors-picton-blue-600": "var(--colors-picton-blue-600)",
        "colors-picton-blue-700": "var(--colors-picton-blue-700)",
        "colors-picton-blue-800": "var(--colors-picton-blue-800)",
        "colors-picton-blue-900": "var(--colors-picton-blue-900)",
        "colors-picton-blue-950": "var(--colors-picton-blue-950)",
        "colors-star-dust-100": "var(--colors-star-dust-100)",
        "colors-star-dust-200": "var(--colors-star-dust-200)",
        "colors-star-dust-300": "var(--colors-star-dust-300)",
        "colors-star-dust-400": "var(--colors-star-dust-400)",
        "colors-star-dust-600": "var(--colors-star-dust-600)",
        "colors-star-dust-700": "var(--colors-star-dust-700)",
        "colors-star-dust-900": "var(--colors-star-dust-900)",
        "colors-white-100": "var(--colors-white-100)",
        "colors-white-300": "var(--colors-white-300)",
        "colors-white-400": "var(--colors-white-400)",
        "colors-white-500": "var(--colors-white-500)",
        "colors-white-600": "var(--colors-white-600)",
        "colors-white-700": "var(--colors-white-700)",
        "colors-white-800": "var(--colors-white-800)",
        "colors-white-900": "var(--colors-white-900)",
        "colors-white-950": "var(--colors-white-950)",
        "electric-violet100": "var(--electric-violet100)",
        "electric-violet200": "var(--electric-violet200)",
        "electric-violet300": "var(--electric-violet300)",
        "electric-violet400": "var(--electric-violet400)",
        "electric-violet50": "var(--electric-violet50)",
        "electric-violet500": "var(--electric-violet500)",
        "electric-violet600": "var(--electric-violet600)",
        "electric-violet700": "var(--electric-violet700)",
        "electric-violet800": "var(--electric-violet800)",
        "electric-violet900": "var(--electric-violet900)",
        "electric-violet950": "var(--electric-violet950)",
        "fuchsiafuchsia-100": "var(--fuchsiafuchsia-100)",
        "fuchsiafuchsia-200": "var(--fuchsiafuchsia-200)",
        "fuchsiafuchsia-300": "var(--fuchsiafuchsia-300)",
        "fuchsiafuchsia-400": "var(--fuchsiafuchsia-400)",
        "fuchsiafuchsia-50": "var(--fuchsiafuchsia-50)",
        "fuchsiafuchsia-500": "var(--fuchsiafuchsia-500)",
        "fuchsiafuchsia-600": "var(--fuchsiafuchsia-600)",
        "fuchsiafuchsia-700": "var(--fuchsiafuchsia-700)",
        "fuchsiafuchsia-800": "var(--fuchsiafuchsia-800)",
        "fuchsiafuchsia-900": "var(--fuchsiafuchsia-900)",
        "fuchsiafuchsia-950": "var(--fuchsiafuchsia-950)",
        "orangeorange-100": "var(--orangeorange-100)",
        "orangeorange-200": "var(--orangeorange-200)",
        "orangeorange-300": "var(--orangeorange-300)",
        "orangeorange-400": "var(--orangeorange-400)",
        "orangeorange-50": "var(--orangeorange-50)",
        "orangeorange-500": "var(--orangeorange-500)",
        "orangeorange-600": "var(--orangeorange-600)",
        "orangeorange-700": "var(--orangeorange-700)",
        "orangeorange-800": "var(--orangeorange-800)",
        "orangeorange-900": "var(--orangeorange-900)",
        "orangeorange-950": "var(--orangeorange-950)",
        "tokens-border-border-primary": "var(--tokens-border-border-primary)",
        "tokens-border-border-second": "var(--tokens-border-border-second)",
        "tokens-color-bg-chat": "var(--tokens-color-bg-chat)",
        "tokens-navi": "var(--tokens-navi)",
        "tokens-surface-surface-brand": "var(--tokens-surface-surface-brand)",
        "tokens-surface-surface-color": "var(--tokens-surface-surface-color)",
        "tokens-surface-surface-invert": "var(--tokens-surface-surface-invert)",
        "tokens-surface-surface-item": "var(--tokens-surface-surface-item)",
        "tokens-surface-surface-item-blur":
          "var(--tokens-surface-surface-item-blur)",
        "tokens-surface-surface-primary":
          "var(--tokens-surface-surface-primary)",
        "tokens-surface-surface-search-live":
          "var(--tokens-surface-surface-search-live)",
        "tokens-surface-surface-secondary":
          "var(--tokens-surface-surface-secondary)",
        "tokens-text-text-item": "var(--tokens-text-text-item)",
        "tokens-text-text-orange": "var(--tokens-text-text-orange)",
        "tokens-text-text-purple": "var(--tokens-text-text-purple)",
        "tokens-text-text-second-800": "var(--tokens-text-text-second-800)",
        "whitewhite-100": "var(--whitewhite-100)",
        "whitewhite-200": "var(--whitewhite-200)",
        "whitewhite-300": "var(--whitewhite-300)",
        "whitewhite-400": "var(--whitewhite-400)",
        "whitewhite-50": "var(--whitewhite-50)",
        "whitewhite-500": "var(--whitewhite-500)",
        "whitewhite-600": "var(--whitewhite-600)",
        "whitewhite-700": "var(--whitewhite-700)",
        "whitewhite-800": "var(--whitewhite-800)",
        "whitewhite-900": "var(--whitewhite-900)",
        "whitewhite-950": "var(--whitewhite-950)",
        border: "hsl(var(--border))",
        input: "hsl(var(--input))",
        ring: "hsl(var(--ring))",
        background: "hsl(var(--background))",
        foreground: "hsl(var(--foreground))",
        primary: {
          DEFAULT: "hsl(var(--primary))",
          foreground: "hsl(var(--primary-foreground))",
        },
        secondary: {
          DEFAULT: "hsl(var(--secondary))",
          foreground: "hsl(var(--secondary-foreground))",
        },
        destructive: {
          DEFAULT: "hsl(var(--destructive))",
          foreground: "hsl(var(--destructive-foreground))",
        },
        muted: {
          DEFAULT: "hsl(var(--muted))",
          foreground: "hsl(var(--muted-foreground))",
        },
        accent: {
          DEFAULT: "hsl(var(--accent))",
          foreground: "hsl(var(--accent-foreground))",
        },
        popover: {
          DEFAULT: "hsl(var(--popover))",
          foreground: "hsl(var(--popover-foreground))",
        },
        card: {
          DEFAULT: "hsl(var(--card))",
          foreground: "hsl(var(--card-foreground))",
        },
      },
      fontFamily: {
        "new-style-body-bold": "var(--new-style-body-bold-font-family)",
        "new-style-body-light": "var(--new-style-body-light-font-family)",
        "new-style-body-medium": "var(--new-style-body-medium-font-family)",
        "new-style-body-regular": "var(--new-style-body-regular-font-family)",
        "new-style-body-semibold": "var(--new-style-body-semibold-font-family)",
        "new-style-caption-bold": "var(--new-style-caption-bold-font-family)",
        "new-style-caption-medium":
          "var(--new-style-caption-medium-font-family)",
        "new-style-caption-regular":
          "var(--new-style-caption-regular-font-family)",
        "new-style-caption-semibold":
          "var(--new-style-caption-semibold-font-family)",
        "new-style-description-bold":
          "var(--new-style-description-bold-font-family)",
        "new-style-description-light":
          "var(--new-style-description-light-font-family)",
        "new-style-description-medium":
          "var(--new-style-description-medium-font-family)",
        "new-style-description-regular":
          "var(--new-style-description-regular-font-family)",
        "new-style-description-semibold":
          "var(--new-style-description-semibold-font-family)",
        "new-style-display-3-medium":
          "var(--new-style-display-3-medium-font-family)",
        "new-style-display-bold": "var(--new-style-display-bold-font-family)",
        "new-style-heading-1-bold":
          "var(--new-style-heading-1-bold-font-family)",
        "new-style-heading-1-medium":
          "var(--new-style-heading-1-medium-font-family)",
        "new-style-heading-1-regular":
          "var(--new-style-heading-1-regular-font-family)",
        "new-style-heading-1-semibold":
          "var(--new-style-heading-1-semibold-font-family)",
        "new-style-heading-2-bold":
          "var(--new-style-heading-2-bold-font-family)",
        "new-style-heading-2-medium":
          "var(--new-style-heading-2-medium-font-family)",
        "new-style-heading-2-regular":
          "var(--new-style-heading-2-regular-font-family)",
        "new-style-heading-2-semibold":
          "var(--new-style-heading-2-semibold-font-family)",
        "new-style-heading-3-bold":
          "var(--new-style-heading-3-bold-font-family)",
        "new-style-heading-3-medium":
          "var(--new-style-heading-3-medium-font-family)",
        "new-style-heading-3-regular":
          "var(--new-style-heading-3-regular-font-family)",
        "new-style-heading-3-semibold":
          "var(--new-style-heading-3-semibold-font-family)",
        "new-style-title-1-bold": "var(--new-style-title-1-bold-font-family)",
        "new-style-title-1-medium":
          "var(--new-style-title-1-medium-font-family)",
        "new-style-title-1-regular":
          "var(--new-style-title-1-regular-font-family)",
        "new-style-title-1-semibold":
          "var(--new-style-title-1-semibold-font-family)",
        "new-style-title-2-bold": "var(--new-style-title-2-bold-font-family)",
        "new-style-title-2-medium":
          "var(--new-style-title-2-medium-font-family)",
        "new-style-title-2-regular":
          "var(--new-style-title-2-regular-font-family)",
        "new-style-title-2-semibold":
          "var(--new-style-title-2-semibold-font-family)",
        "new-style-title-3-bold": "var(--new-style-title-3-bold-font-family)",
        "new-style-title-3-medium":
          "var(--new-style-title-3-medium-font-family)",
        "new-style-title-3-regular":
          "var(--new-style-title-3-regular-font-family)",
        "new-style-title-3-semibold":
          "var(--new-style-title-3-semibold-font-family)",
        "text-style-display-xs-bold":
          "var(--text-style-display-xs-bold-font-family)",
        "text-style-display-xs-medium":
          "var(--text-style-display-xs-medium-font-family)",
        "text-style-display-xs-regular":
          "var(--text-style-display-xs-regular-font-family)",
        "text-style-display-xs-semibold":
          "var(--text-style-display-xs-semibold-font-family)",
        "text-style-text-lg-bold": "var(--text-style-text-lg-bold-font-family)",
        "text-style-text-lg-medium":
          "var(--text-style-text-lg-medium-font-family)",
        "text-style-text-lg-regular":
          "var(--text-style-text-lg-regular-font-family)",
        "text-style-text-lg-semibold":
          "var(--text-style-text-lg-semibold-font-family)",
        "text-style-text-md-bold": "var(--text-style-text-md-bold-font-family)",
        "text-style-text-md-medium":
          "var(--text-style-text-md-medium-font-family)",
        "text-style-text-md-regular":
          "var(--text-style-text-md-regular-font-family)",
        "text-style-text-md-semibold":
          "var(--text-style-text-md-semibold-font-family)",
        "text-style-text-sm-bold": "var(--text-style-text-sm-bold-font-family)",
        "text-style-text-sm-medium":
          "var(--text-style-text-sm-medium-font-family)",
        "text-style-text-sm-regular":
          "var(--text-style-text-sm-regular-font-family)",
        "text-style-text-sm-semibold":
          "var(--text-style-text-sm-semibold-font-family)",
        "text-style-text-xl-bold": "var(--text-style-text-xl-bold-font-family)",
        "text-style-text-xl-medium":
          "var(--text-style-text-xl-medium-font-family)",
        "text-style-text-xl-regular":
          "var(--text-style-text-xl-regular-font-family)",
        "text-style-text-xl-semibold":
          "var(--text-style-text-xl-semibold-font-family)",
        "text-style-text-xs-bold": "var(--text-style-text-xs-bold-font-family)",
        "text-style-text-xs-medium":
          "var(--text-style-text-xs-medium-font-family)",
        "text-style-text-xs-regular":
          "var(--text-style-text-xs-regular-font-family)",
        "text-style-text-xs-semibold":
          "var(--text-style-text-xs-semibold-font-family)",
        "text-style-text-xs-text-xxl-regular":
          "var(--text-style-text-xs-text-xxl-regular-font-family)",
        sans: [
          "ui-sans-serif",
          "system-ui",
          "sans-serif",
          '"Apple Color Emoji"',
          '"Segoe UI Emoji"',
          '"Segoe UI Symbol"',
          '"Noto Color Emoji"',
        ],
      },
      boxShadow: {
        ap: "var(--ap)",
        chat: "var(--chat)",
        dropbtn: "var(--dropbtn)",
      },
      borderRadius: {
        lg: "var(--radius)",
        md: "calc(var(--radius) - 2px)",
        sm: "calc(var(--radius) - 4px)",
      },
      keyframes: {
        "accordion-down": {
          from: { height: "0" },
          to: { height: "var(--radix-accordion-content-height)" },
        },
        "accordion-up": {
          from: { height: "var(--radix-accordion-content-height)" },
          to: { height: "0" },
        },
      },
      animation: {
        "accordion-down": "accordion-down 0.2s ease-out",
        "accordion-up": "accordion-up 0.2s ease-out",
      },
    },
    container: { center: true, padding: "2rem", screens: { "2xl": "1400px" } },
  },
  plugins: [],
  darkMode: ["class"],
};
