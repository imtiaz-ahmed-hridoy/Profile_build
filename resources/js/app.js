import './bootstrap';
import './navbar'
import Rellax from "rellax";



import lottie from "lottie-web";
import { defineElement } from "@lordicon/element";


// define "lord-icon" custom element with default properties
defineElement(lottie.loadAnimation);


//vite assets

import.meta.glob(['../webAssets/**']);


// rellax for parallax lib

// Start Rellax
var rellax = new Rellax('.rellax');

// Destroy and create again parallax with previous settings
rellax.refresh();






