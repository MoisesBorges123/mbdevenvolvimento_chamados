require('./bootstrap');
function print_r( obj, max, sep, level ) {
    level = level || 0;
    max = max || 10;
    sep = sep || ' ';

    if( level > max ) return "[WARNING: Too much recursion]\n";
    
    var i, result = '', tab = '', t = typeof obj;

    if( obj === null ) {
        result += "(null)\n";
    } else if( t == 'object' ) {
        level++;

        for( i = 0; i < level; i++ ) { tab += sep; }
        if( obj && obj.length ) { t = 'array'; }
        
        result += '(' + t + ") :\n";
        for( i in obj ) {
            try {
                result += tab + '[' + i + '] : ' + print_r( obj[i], max, sep, (level + 1) );
            } catch( error ) {
                return "[ERROR: " + error + "]\n";
            }
        }
    } else {
        if( t == 'string' ) {
            if( obj == '' )    obj = '(empty)';
        }
        result += '(' + t + ') ' + obj + "\n";
    }
    return result;
};
var var_dump = print_r;
//window._ = require('lodash');
//window.$ = window.jQuery = require('jquery');
//var Inputmask = require('inputmask');
//var selector = document.getElementById("cep");

//var im = new Inputmask("99-9999999");
//im.mask(selector);
//import $ from 'jquery';


//import Alpine from 'alpinejs';

//import mask from '@alpinejs/mask'
//Alpine.plugin(mask);
//window.Alpine = Alpine;
//Alpine.start();
