'use strict';
let mix = require('laravel-mix');

function IOEntidade(params={}){
  let $ = this;
  let dep = {
    entidade: 'vendor/agileti/ioentidade/src/assets/src/',
    moment: 'node_modules/moment/'
  }

  let config = {
    optimize:false,
    sass:false,
    cb:()=>{},
  }
  
  this.compile = (IO,callback = ()=>{})=>{

    mix.styles([
      IO.src.css + 'helpers/dv-buttons.css',
      IO.dep.io.toastr + 'toastr.min.css',
      IO.src.io.css + 'toastr.css',
      dep.entidade + 'entidade.css',
    ], IO.dest.io.root + 'services/io-entidade.min.css');

    mix.babel([
      IO.dep.io.toastr + 'toastr.min.js',
      IO.src.io.js + 'defaults/def-toastr.js',
    ], IO.dest.io.root + 'services/io-entidade-babel.min.js');
    
    mix.scripts([
      dep.moment + 'min/moment.min.js',
      IO.src.io.vendors + 'moment/moment-pt-br.js'
    ], IO.dest.io.root + 'services/io-entidade-mix.min.js');

    //copy separated for compatibility
    mix.babel(dep.entidade + 'entidade.js', IO.dest.io.root + 'services/io-entidade.min.js');
    
    callback(IO);
  }
}


module.exports = IOEntidade;
