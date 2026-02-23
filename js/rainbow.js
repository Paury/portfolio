const heading = document.getElementById('dynamic-heading');

// List of fonts to cycle through
const fonts = [
  'Arial, sans-serif',
  'Verdana, sans-serif',
  'Tahoma, sans-serif',
  'Trebuchet MS, sans-serif',
  'Impact, sans-serif',
  '"Comic Sans MS", cursive, sans-serif',
  '"Brush Script MT", cursive',
  '"Lucida Handwriting", cursive',
  '"Papyrus", fantasy',
  'Georgia, serif',
  '"Times New Roman", serif',
  '"Garamond", serif',
  '"Palatino Linotype", serif',
  '"Book Antiqua", serif',
  '"Courier New", monospace',
  '"Lucida Console", monospace',
  '"Monaco", monospace',
  '"Consolas", monospace',
  '"Courier", monospace',
  '"Segoe Print", cursive',
  '"Segoe Script", cursive',
  '"Arial Black", sans-serif',
  '"Rockwell", serif',
  '"Stencil", sans-serif',
  '"Marker Felt", sans-serif',
  '"Chalkboard SE", sans-serif',
  '"Comic Neue", cursive',
  '"Creepster", cursive',  
  '"Freckle Face", cursive',
  '"Permanent Marker", cursive', 
  '"Amatic SC", cursive', 
  '"Pacifico", cursive', 
  '"Monoton", cursive', 
  '"Press Start 2P", monospace' 
];


// Change font every 200ms
let interval = setInterval(() => {
  const randomFont = fonts[Math.floor(Math.random() * fonts.length)];
  heading.style.fontFamily = randomFont;
}, 200);

setTimeout(() => {
  clearInterval(interval);
  heading.style.fontFamily = fonts[Math.floor(Math.random() * fonts.length)];
}, 100000000000);


