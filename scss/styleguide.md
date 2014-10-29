Sport theme for vih.dk
==

## Coding style


### Spacing

- Use soft-tabs with a two space indent. Spaces are the only way to guarantee code renders the same in any person's environment.
- Put spaces after : in property declarations.
- Put spaces before { in rule declarations.
- Put line breaks between rulesets.
- When grouping selectors, keep individual selectors to a single line.
- Place closing braces of declaration blocks on a new line.
- Each declaration should appear on its own line for more accurate error reporting.

### Formatting

- Use hex color codes #000 unless using rgba().
- Use // for comment blocks (instead of /* */).
- Avoid specifying units for zero values, e.g., margin: 0; instead of margin: 0px;.
- Strive to limit use of shorthand declarations to instances where you must explicitly set all the available values.

### Misc

- As a rule of thumb, avoid unnecessary nesting in [SCSS](http://sass-lang.com/). At most, aim for three levels. If you cannot help it, step back and rethink your overall strategy (either the specificity needed, or the layout of the nesting).
- Document styles with [KSS](https://github.com/kneath/kss).