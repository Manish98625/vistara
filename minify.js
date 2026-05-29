const fs = require('fs');
const path = require('path');

// Simple CSS minifier
function minifyCSS(css) {
    return css
        .replace(/\/\*[\s\S]*?\*\//g, '') // Remove comments
        .replace(/\s+/g, ' ') // Collapse whitespace
        .replace(/\s*{\s*/g, '{')
        .replace(/\s*}\s*/g, '}')
        .replace(/\s*:\s*/g, ':')
        .replace(/\s*;\s*/g, ';')
        .replace(/;}/g, '}')
        .trim();
}

// Simple JS minifier
function minifyJS(js) {
    return js
        .replace(/\/\/.*$/gm, '') // Remove line comments
        .replace(/\/\*[\s\S]*?\*\//g, '') // Remove block comments
        .replace(/\s+/g, ' ') // Collapse whitespace
        .replace(/\s*([{}()[\];,:+\-*/])\s*/g, '$1')
        .trim();
}

// Read, minify, and write CSS
const cssPath = path.join(__dirname, 'public/css/style.css');
const cssMinPath = path.join(__dirname, 'public/css/style.min.css');
const cssContent = fs.readFileSync(cssPath, 'utf8');
const minifiedCSS = minifyCSS(cssContent);
fs.writeFileSync(cssMinPath, minifiedCSS, 'utf8');
console.log('✓ Minified style.css to style.min.css');

// Read, minify, and write JS
const jsPath = path.join(__dirname, 'public/js/script.js');
const jsMinPath = path.join(__dirname, 'public/js/script.min.js');
const jsContent = fs.readFileSync(jsPath, 'utf8');
const minifiedJS = minifyJS(jsContent);
fs.writeFileSync(jsMinPath, minifiedJS, 'utf8');
console.log('✓ Minified script.js to script.min.js');
