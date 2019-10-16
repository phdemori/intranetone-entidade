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
    mix.babel(dep.entidade + 'cidades_otimizado.js', IO.dest.io.root + 'vendors/cidades_otimizado.js');
    mix.babel(dep.entidade + 'vendors/jQuery-Autocomplete-master/dist/jquery.autocomplete.min.js', IO.dest.io.root + 'vendors/jquery.autocomplete.min.js');
    mix.babel(dep.entidade + 'vendors/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js', IO.dest.io.root + 'vendors/jquery.mask.min.js');
    mix.babel(dep.entidade + 'vendors/select2/dist/', IO.dest.io.root + 'vendors/select2/');
    mix.babel('vendor/agileti/ioentidade/src/assets/', 'node_modules/intranetone-entidade/');

    callback(IO);
  }
}


module.exports = IOEntidade;
