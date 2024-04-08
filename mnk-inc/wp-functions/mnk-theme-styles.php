<?php
/**
 * Mnk Function: cargando estilos del template
 */
function mnk_theme_styles ()
{
    
    if (is_page ('personaliza-tu-formula')) {
        echo '<style>html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}img{border-style:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}body{color:#404040;font-family:Zilla Slab,serif;line-height:1.5;min-width:300px;position:relative;font-size:14px;font-size:.875rem;padding:0;margin:0;-webkit-text-size-adjust:100%;letter-spacing:-.015em;background-color:#fff}@media only screen and (min-width:301px){body{overflow-x:hidden}}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}:focus{outline:0}picture{display:inline-block}a{color:#404040;text-decoration:none}p,ul{font-size:15px;font-size:.9375rem;margin:0 0 15px}p:last-child,ul:last-child{margin:0}img{vertical-align:middle;max-width:100%;height:auto}ul{padding:0;margin:0 0 20px;list-style:none}h2{font-size:20px;font-size:1.25rem}h4{font-size:18px;font-size:1.125rem}h5{font-size:18px;font-size:1.125rem}h2,h4,h5{color:#404040;font-family:Zilla Slab,serif;margin-top:0;margin-bottom:20px;line-height:1.13;font-weight:500}.m-container{margin:auto;width:auto;padding-left:20px;padding-right:20px;position:relative}.m-title{font-size:30px;font-size:1.875rem;font-weight:400;line-height:31px;line-height:1.9375rem}.m-modal{overflow-x:hidden;overflow-y:auto;position:fixed;z-index:1;visibility:hidden;background-color:transparent;opacity:0}.m-modal,.m-modal:before{height:100%;left:0;top:0;width:100%}.m-modal:before{opacity:.8;content:"";position:absolute;background:-webkit-linear-gradient(45deg,#d2bae5,#e6cdee 50.27%,#a9ebef);background:-o-linear-gradient(45deg,#d2bae5 0,#e6cdee 50.27%,#a9ebef 100%);background:linear-gradient(45deg,#d2bae5,#e6cdee 50.27%,#a9ebef)}.m-modal__content{position:relative;z-index:200;display:table;table-layout:fixed;height:100%;width:100%}.m-modal__content>*{display:table-cell;vertical-align:middle}.m-modal__animation{opacity:0}.m-modal__close{width:32px;height:32px;line-height:32px;line-height:2rem;visibility:hidden;position:absolute;right:20px;top:20px;border-radius:100%;border:2px solid #000;background-color:#fff;text-align:center;-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}.m-modal__close:after,.m-modal__close:before{content:"";display:block;height:1.6px;width:14px;top:50%;left:50%;margin-top:-1px;margin-left:-7px;border-radius:1px;position:absolute;background-color:#000}.m-modal__close:before{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.m-modal__close:after{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}.m-modal__container{width:85%;margin:20px auto;background-color:#fff;border-radius:10px;text-align:center;position:relative;padding:35px 20px 45px;color:#000;font-size:12px;font-size:.75rem;-webkit-box-shadow:0 2px 10px rgba(0,0,0,.05);box-shadow:0 2px 10px rgba(0,0,0,.05)}.m-modal__container p{margin-bottom:25px}.m-modal__container h2{font-size:16px;font-size:1rem;margin-top:20px;margin-bottom:15px}.m-modal__scene{opacity:0;visibility:hidden;overflow:hidden;height:0;position:relative}.m-modal__scene.js--active{opacity:1;visibility:visible;height:auto}.m-modal__scene .m-formula{top:50%;left:50%;width:90%;padding:20px 0;position:fixed;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.m-modal__scene .m-formula__content{grid-gap:44px;gap:44px}.m-modal__scene .m-formula__option{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-bottom:15px}.m-modal__scene .m-formula__option:last-child{margin-bottom:0}.m-modal__scene .m-formula__option picture{width:74px;margin-right:30px}.m-modal__scene .m-formula__option .m-button{margin:0;width:152px}.m-modal__scene .m-formula__options{grid-gap:14px;gap:14px;-ms-flex-wrap:wrap;flex-wrap:wrap}.m-modal__scene .m-formula__options,.m-modal__scene .m-formula__options .m-button{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.m-modal__scene .m-formula__options .m-button{width:150px;min-width:150px;margin:unset;-webkit-box-align:center;-ms-flex-align:center;align-items:center}@media only screen and (min-width:360px){.m-modal__scene .m-formula__options .m-button{width:170px;min-width:170px}}.m-modal__scene .m-formula__options .m-button span{display:block;font-size:10px;font-size:.625rem;line-height:16px;line-height:1rem}@media only screen and (min-width:360px){.m-modal__scene .m-formula__options .m-button span{font-size:11px;font-size:.6875rem}}.m-modal__scene .m-formula__fragances{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-top:7px;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.m-modal__scene .m-formula__fragance{width:150px;margin-bottom:10px}.m-modal__scene .m-formula__fragance span{display:block;text-transform:uppercase}.m-modal__scene .m-formula__properties{margin-top:14px;text-align:left}.m-modal__scene .m-formula__properties__container{display:-webkit-box;display:-ms-flexbox;display:flex;margin-bottom:15px;-webkit-box-align:baseline;-ms-flex-align:baseline;align-items:baseline;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.m-modal__scene .m-formula__properties__property{-webkit-box-flex:1;-ms-flex:1 0 0px;flex:1 0 0;display:-webkit-box;display:-ms-flexbox;display:flex;text-align:center;margin:0 4px 10px;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.m-modal__scene .m-formula__properties__property picture{width:30px;margin-right:0;margin-bottom:4px}.m-modal__scene .m-formula__cards__card__content{display:-webkit-box;display:-ms-flexbox;display:flex;max-width:300px;padding:24px 10px;border-radius:10px;margin:0 auto 30px;border:2px solid #404040}.m-modal__scene .m-formula__cards__card__content picture{-ms-flex-negative:0;flex-shrink:0;max-width:80px;margin-right:20px}.m-modal__scene .m-formula__cards__card__content__description{font-size:18px;font-size:1.125rem;color:#404040;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;text-align:left;margin-left:20px}.m-modal__scene .m-formula__cards__card__content__description p{margin-bottom:5px}.m-modal__scene .m-formula__cards__card__content__description p:first-child{font-size:16px;font-size:1rem;line-height:18px;line-height:1.125rem;font-weight:600}.m-modal__scene .m-formula__cards__card__content__description p:nth-child(2){font-size:15px;font-size:.9375rem;font-weight:600;font-family:Roboto,sans-serif}.m-modal__scene .m-formula__cards__card__content__description .m-price{font-size:24px;font-size:1.5rem;font-weight:500;line-height:1;text-align:right}.m-modal__scene .m-more{line-height:1;font-size:16px;font-size:1rem;margin:20px 0 0;font-family:Roboto,sans-serif}.m-modal__scene .m-more a{font-weight:700;text-decoration:underline}.m-modal__scene .m-title{font-size:30px;font-size:1.875rem;font-weight:500;line-height:30px;line-height:1.875rem;margin-bottom:10px}.m-modal__scene .m-question{display:inline-block;font-size:16px;font-size:1rem;line-height:20px;line-height:1.25rem}.m-modal__scene .m-small{font-size:15px;font-size:.9375rem;line-height:18px;line-height:1.125rem;font-family:Roboto,sans-serif}.m-modal__scene .m-buttons{left:0;right:0;width:90%;height:35px;bottom:25px;display:-webkit-box;display:-ms-flexbox;display:flex;margin:0 auto;position:fixed;max-width:1150px;font-family:Roboto,sans-serif;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.m-modal__scene .m-buttons.m-single{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.m-modal__scene .m-button{width:243px;height:55px;line-height:55px;line-height:3.4375rem;margin:0 auto 24px;display:block;color:#404040;border-color:#404040}.m-modal__scene .m-price{font-size:48px;font-size:3rem;line-height:70px;line-height:4.375rem;font-weight:500}a.m-scene-button{opacity:.7}.m-header{top:0;z-index:21;width:100%;position:absolute;padding:12px 0 0}.m-header .m-container__content{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.m-header__logo{width:50px}.m-header__open-menu{height:44px;margin:5px 0 0;padding:10px 0 10px 10px}.m-header__open-menu.m-black .m-menu-icon span,.m-header__open-menu.m-black .m-menu-icon span:after,.m-header__open-menu.m-black .m-menu-icon span:before{background-color:#000}.m-header__menu{top:0;opacity:1;z-index:12;width:100%;height:100%;right:-100%;position:fixed;overflow-y:auto;padding:30px 0;text-align:center;background-color:#fff}.m-header__menu__close{padding:0 32px;display:block;margin-top:19px;margin-bottom:34px}.m-header__menu__close span{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.m-header__menu__close span,.m-header__menu__close span:after{width:30px;height:2px;display:block;border-radius:6px;background-color:#000}.m-header__menu__close span:after{content:"";margin-bottom:34px;-webkit-transform:rotate(-92deg);-ms-transform:rotate(-92deg);transform:rotate(-92deg)}.m-header__menu ul{margin:0}.m-header__menu li{margin:0 0 25px}.m-header__menu li a{opacity:1;display:block;font-size:15px;font-size:.9375rem;padding:0 32px;line-height:45px;line-height:2.8125rem;color:#404040;text-align:center}.m-header__menu li a:after{content:"";height:1px;width:134px;display:block;margin:15px auto;text-align:center;background:-webkit-gradient(linear,left top,right top,from(#c49bdf),to(#89cdf0));background:-webkit-linear-gradient(left,#c49bdf,#89cdf0);background:-o-linear-gradient(left,#c49bdf 0,#89cdf0 100%);background:linear-gradient(90deg,#c49bdf,#89cdf0)}.m-header__options{width:187px;display:-webkit-box;display:-ms-flexbox;display:flex;margin:50px auto 0;position:relative;padding:11px 12px;border-radius:50px;background-color:#fff;border:1px solid transparent;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.m-header__options:after{top:0;left:0;right:0;bottom:0;z-index:-1;content:"";margin:-2px;position:absolute;border-radius:inherit;background:-webkit-gradient(linear,left top,right top,from(#c49bdf),to(#89cdf0));background:-webkit-linear-gradient(left,#c49bdf,#89cdf0);background:-o-linear-gradient(left,#c49bdf 0,#89cdf0 100%);background:linear-gradient(90deg,#c49bdf,#89cdf0)}.m-header__options a{opacity:1;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex}.m-header-alternative .m-header__menu li a{color:#404040}.m-header-alternative .m-header__options{border:1px solid #404040}.m-button{font-style:normal;font-family:Roboto,sans-serif;font-weight:500;border-radius:5px;color:#fff;font-size:12px;font-size:.75rem;margin:0 auto;display:inline-block;min-width:178px;height:50px;line-height:50px;line-height:3.125rem;padding:0 10px;text-align:center;text-transform:uppercase;border:2px solid #fff;letter-spacing:.15em;background:-webkit-gradient(linear,left bottom,left top,from(hsla(0,0%,100%,.3)),to(hsla(0,0%,100%,.3)));background:-webkit-linear-gradient(bottom,hsla(0,0%,100%,.3),hsla(0,0%,100%,.3));background:-o-linear-gradient(bottom,hsla(0,0%,100%,.3),hsla(0,0%,100%,.3));background:linear-gradient(0deg,hsla(0,0%,100%,.3),hsla(0,0%,100%,.3));overflow:hidden;-webkit-box-shadow:none;box-shadow:none}.m-button span{position:relative;z-index:1}.m-button--black{color:#404040;background:transparent no-repeat 0 0;border-color:#404040}.m-menu-icon{position:relative;width:33px;height:2px;display:inline-block;vertical-align:middle}.m-menu-icon span,.m-menu-icon span:after,.m-menu-icon span:before{background-color:#fff;display:block;position:absolute;width:33px;height:2px;content:"";left:0;border-radius:6px}.m-menu-icon span{top:0}.m-menu-icon span:before{-webkit-transform-origin:33% 100%;-ms-transform-origin:33% 100%;transform-origin:33% 100%;top:-10px;z-index:10}.m-menu-icon span:after{-webkit-transform-origin:33% 0;-ms-transform-origin:33% 0;transform-origin:33% 0;top:10px;z-index:10}.m-link{display:inline-block;font-weight:700;padding:5px 10px;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);opacity:1;font-size:15px;font-size:.9375rem;color:#404040;text-decoration:underline;text-transform:uppercase}.m-link.m--icon{text-decoration:none}.m-link.m--icon>*{display:inline-block;vertical-align:middle;text-decoration:underline}.m-link.m--icon picture{position:relative;top:-1px;text-decoration:none;margin:0 0 0 5px}.m-link.m--icon picture.m-before{margin:0 5px 0 0;-webkit-transform:scaleX(-1);-ms-transform:scaleX(-1);transform:scaleX(-1)}.m-square{z-index:2;opacity:1;width:25px;height:25px;position:absolute;background-color:#d0a8e8}.m-square.js--active{opacity:1}.m-square.m--white{background-color:#fff}.m-square.m--white.m--line{border-color:#fff!important}.m-square.m--back{z-index:auto}.m-square.m--line{background-color:transparent;border:2px solid #d0a8e8}.m-square.m--shadow{-webkit-box-shadow:2px 2px 5px rgba(0,0,0,.15);box-shadow:2px 2px 5px rgba(0,0,0,.15)}.m-page{padding:0}html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}img{border-style:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}body{color:#404040;font-family:Zilla Slab,serif;line-height:1.5;min-width:300px;position:relative;font-size:14px;font-size:.875rem;padding:0;margin:0;-webkit-text-size-adjust:100%;letter-spacing:-.015em;background-color:#fff}@media only screen and (min-width:301px){body{overflow-x:hidden}}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}:focus{outline:0}picture{display:inline-block}a{color:#404040;text-decoration:none}p,ul{font-size:15px;font-size:.9375rem;margin:0 0 15px}p:last-child,ul:last-child{margin:0}img{vertical-align:middle;max-width:100%;height:auto}ul{padding:0;margin:0 0 20px;list-style:none}h2{font-size:20px;font-size:1.25rem}h4{font-size:18px;font-size:1.125rem}h5{font-size:18px;font-size:1.125rem}h2,h4,h5{color:#404040;font-family:Zilla Slab,serif;margin-top:0;margin-bottom:20px;line-height:1.13;font-weight:500}.m-container{margin:auto;width:auto;padding-left:20px;padding-right:20px;position:relative}.m-title{font-size:30px;font-size:1.875rem;font-weight:400;line-height:31px;line-height:1.9375rem}.m-modal{overflow-x:hidden;overflow-y:auto;position:fixed;z-index:1;visibility:hidden;background-color:transparent;opacity:0}.m-modal,.m-modal:before{height:100%;left:0;top:0;width:100%}.m-modal:before{opacity:.8;content:"";position:absolute;background:-webkit-linear-gradient(45deg,#d2bae5,#e6cdee 50.27%,#a9ebef);background:-o-linear-gradient(45deg,#d2bae5 0,#e6cdee 50.27%,#a9ebef 100%);background:linear-gradient(45deg,#d2bae5,#e6cdee 50.27%,#a9ebef)}.m-modal__content{position:relative;z-index:200;display:table;table-layout:fixed;height:100%;width:100%}.m-modal__content>*{display:table-cell;vertical-align:middle}.m-modal__animation{opacity:0}.m-modal__close{width:32px;height:32px;line-height:32px;line-height:2rem;visibility:hidden;position:absolute;right:20px;top:20px;border-radius:100%;border:2px solid #000;background-color:#fff;text-align:center;-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}.m-modal__close:after,.m-modal__close:before{content:"";display:block;height:1.6px;width:14px;top:50%;left:50%;margin-top:-1px;margin-left:-7px;border-radius:1px;position:absolute;background-color:#000}.m-modal__close:before{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.m-modal__close:after{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}.m-modal__container{width:85%;margin:20px auto;background-color:#fff;border-radius:10px;text-align:center;position:relative;padding:35px 20px 45px;color:#000;font-size:12px;font-size:.75rem;-webkit-box-shadow:0 2px 10px rgba(0,0,0,.05);box-shadow:0 2px 10px rgba(0,0,0,.05)}.m-modal__container p{margin-bottom:25px}.m-modal__container h2{font-size:16px;font-size:1rem;margin-top:20px;margin-bottom:15px}.m-modal__scene{opacity:0;visibility:hidden;overflow:hidden;height:0;position:relative}.m-modal__scene.js--active{opacity:1;visibility:visible;height:auto}.m-modal__scene .m-formula{top:50%;left:50%;width:90%;padding:20px 0;position:fixed;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.m-modal__scene .m-formula__content{grid-gap:44px;gap:44px}.m-modal__scene .m-formula__option{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-bottom:15px}.m-modal__scene .m-formula__option:last-child{margin-bottom:0}.m-modal__scene .m-formula__option picture{width:74px;margin-right:30px}.m-modal__scene .m-formula__option .m-button{margin:0;width:152px}.m-modal__scene .m-formula__options{grid-gap:14px;gap:14px;-ms-flex-wrap:wrap;flex-wrap:wrap}.m-modal__scene .m-formula__options,.m-modal__scene .m-formula__options .m-button{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.m-modal__scene .m-formula__options .m-button{width:150px;min-width:150px;margin:unset;-webkit-box-align:center;-ms-flex-align:center;align-items:center}@media only screen and (min-width:360px){.m-modal__scene .m-formula__options .m-button{width:170px;min-width:170px}}.m-modal__scene .m-formula__options .m-button span{display:block;font-size:10px;font-size:.625rem;line-height:16px;line-height:1rem}@media only screen and (min-width:360px){.m-modal__scene .m-formula__options .m-button span{font-size:11px;font-size:.6875rem}}.m-modal__scene .m-formula__fragances{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-top:7px;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.m-modal__scene .m-formula__fragance{width:150px;margin-bottom:10px}.m-modal__scene .m-formula__fragance span{display:block;text-transform:uppercase}.m-modal__scene .m-formula__properties{margin-top:14px;text-align:left}.m-modal__scene .m-formula__properties__container{display:-webkit-box;display:-ms-flexbox;display:flex;margin-bottom:15px;-webkit-box-align:baseline;-ms-flex-align:baseline;align-items:baseline;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.m-modal__scene .m-formula__properties__property{-webkit-box-flex:1;-ms-flex:1 0 0px;flex:1 0 0;display:-webkit-box;display:-ms-flexbox;display:flex;text-align:center;margin:0 4px 10px;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.m-modal__scene .m-formula__properties__property picture{width:30px;margin-right:0;margin-bottom:4px}.m-modal__scene .m-formula__cards__card__content{display:-webkit-box;display:-ms-flexbox;display:flex;max-width:300px;padding:24px 10px;border-radius:10px;margin:0 auto 30px;border:2px solid #404040}.m-modal__scene .m-formula__cards__card__content picture{-ms-flex-negative:0;flex-shrink:0;max-width:80px;margin-right:20px}.m-modal__scene .m-formula__cards__card__content__description{font-size:18px;font-size:1.125rem;color:#404040;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;text-align:left;margin-left:20px}.m-modal__scene .m-formula__cards__card__content__description p{margin-bottom:5px}.m-modal__scene .m-formula__cards__card__content__description p:first-child{font-size:16px;font-size:1rem;line-height:18px;line-height:1.125rem;font-weight:600}.m-modal__scene .m-formula__cards__card__content__description p:nth-child(2){font-size:15px;font-size:.9375rem;font-weight:600;font-family:Roboto,sans-serif}.m-modal__scene .m-formula__cards__card__content__description .m-price{font-size:24px;font-size:1.5rem;font-weight:500;line-height:1;text-align:right}.m-modal__scene .m-more{line-height:1;font-size:16px;font-size:1rem;margin:20px 0 0;font-family:Roboto,sans-serif}.m-modal__scene .m-more a{font-weight:700;text-decoration:underline}.m-modal__scene .m-title{font-size:30px;font-size:1.875rem;font-weight:500;line-height:30px;line-height:1.875rem;margin-bottom:10px}.m-modal__scene .m-question{display:inline-block;font-size:16px;font-size:1rem;line-height:20px;line-height:1.25rem}.m-modal__scene .m-small{font-size:15px;font-size:.9375rem;line-height:18px;line-height:1.125rem;font-family:Roboto,sans-serif}.m-modal__scene .m-buttons{left:0;right:0;width:90%;height:35px;bottom:25px;display:-webkit-box;display:-ms-flexbox;display:flex;margin:0 auto;position:fixed;max-width:1150px;font-family:Roboto,sans-serif;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.m-modal__scene .m-buttons.m-single{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.m-modal__scene .m-button{width:243px;height:55px;line-height:55px;line-height:3.4375rem;margin:0 auto 24px;display:block;color:#404040;border-color:#404040}.m-modal__scene .m-price{font-size:48px;font-size:3rem;line-height:70px;line-height:4.375rem;font-weight:500}a.m-scene-button{opacity:.7}.m-header{top:0;z-index:21;width:100%;position:absolute;padding:12px 0 0}.m-header .m-container__content{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.m-header__logo{width:50px}.m-header__open-menu{height:44px;margin:5px 0 0;padding:10px 0 10px 10px}.m-header__open-menu.m-black .m-menu-icon span,.m-header__open-menu.m-black .m-menu-icon span:after,.m-header__open-menu.m-black .m-menu-icon span:before{background-color:#000}.m-header__menu{top:0;opacity:1;z-index:12;width:100%;height:100%;right:-100%;position:fixed;overflow-y:auto;padding:30px 0;text-align:center;background-color:#fff}.m-header__menu__close{padding:0 32px;display:block;margin-top:19px;margin-bottom:34px}.m-header__menu__close span{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.m-header__menu__close span,.m-header__menu__close span:after{width:30px;height:2px;display:block;border-radius:6px;background-color:#000}.m-header__menu__close span:after{content:"";margin-bottom:34px;-webkit-transform:rotate(-92deg);-ms-transform:rotate(-92deg);transform:rotate(-92deg)}.m-header__menu ul{margin:0}.m-header__menu li{margin:0 0 25px}.m-header__menu li a{opacity:1;display:block;font-size:15px;font-size:.9375rem;padding:0 32px;line-height:45px;line-height:2.8125rem;color:#404040;text-align:center}.m-header__menu li a:after{content:"";height:1px;width:134px;display:block;margin:15px auto;text-align:center;background:-webkit-gradient(linear,left top,right top,from(#c49bdf),to(#89cdf0));background:-webkit-linear-gradient(left,#c49bdf,#89cdf0);background:-o-linear-gradient(left,#c49bdf 0,#89cdf0 100%);background:linear-gradient(90deg,#c49bdf,#89cdf0)}.m-header__options{width:187px;display:-webkit-box;display:-ms-flexbox;display:flex;margin:50px auto 0;position:relative;padding:11px 12px;border-radius:50px;background-color:#fff;border:1px solid transparent;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.m-header__options:after{top:0;left:0;right:0;bottom:0;z-index:-1;content:"";margin:-2px;position:absolute;border-radius:inherit;background:-webkit-gradient(linear,left top,right top,from(#c49bdf),to(#89cdf0));background:-webkit-linear-gradient(left,#c49bdf,#89cdf0);background:-o-linear-gradient(left,#c49bdf 0,#89cdf0 100%);background:linear-gradient(90deg,#c49bdf,#89cdf0)}.m-header__options a{opacity:1;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex}.m-header-alternative .m-header__menu li a{color:#404040}.m-header-alternative .m-header__options{border:1px solid #404040}.m-button{font-style:normal;font-family:Roboto,sans-serif;font-weight:500;border-radius:5px;color:#fff;font-size:12px;font-size:.75rem;margin:0 auto;display:inline-block;min-width:178px;height:50px;line-height:50px;line-height:3.125rem;padding:0 10px;text-align:center;text-transform:uppercase;border:2px solid #fff;letter-spacing:.15em;background:-webkit-gradient(linear,left bottom,left top,from(hsla(0,0%,100%,.3)),to(hsla(0,0%,100%,.3)));background:-webkit-linear-gradient(bottom,hsla(0,0%,100%,.3),hsla(0,0%,100%,.3));background:-o-linear-gradient(bottom,hsla(0,0%,100%,.3),hsla(0,0%,100%,.3));background:linear-gradient(0deg,hsla(0,0%,100%,.3),hsla(0,0%,100%,.3));overflow:hidden;-webkit-box-shadow:none;box-shadow:none}.m-button span{position:relative;z-index:1}.m-button--black{color:#404040;background:transparent no-repeat 0 0;border-color:#404040}.m-menu-icon{position:relative;width:33px;height:2px;display:inline-block;vertical-align:middle}.m-menu-icon span,.m-menu-icon span:after,.m-menu-icon span:before{background-color:#fff;display:block;position:absolute;width:33px;height:2px;content:"";left:0;border-radius:6px}.m-menu-icon span{top:0}.m-menu-icon span:before{-webkit-transform-origin:33% 100%;-ms-transform-origin:33% 100%;transform-origin:33% 100%;top:-10px;z-index:10}.m-menu-icon span:after{-webkit-transform-origin:33% 0;-ms-transform-origin:33% 0;transform-origin:33% 0;top:10px;z-index:10}.m-link{display:inline-block;font-weight:700;padding:5px 10px;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);opacity:1;font-size:15px;font-size:.9375rem;color:#404040;text-decoration:underline;text-transform:uppercase}.m-link.m--icon{text-decoration:none}.m-link.m--icon>*{display:inline-block;vertical-align:middle;text-decoration:underline}.m-link.m--icon picture{position:relative;top:-1px;text-decoration:none;margin:0 0 0 5px}.m-link.m--icon picture.m-before{margin:0 5px 0 0;-webkit-transform:scaleX(-1);-ms-transform:scaleX(-1);transform:scaleX(-1)}.m-square{z-index:2;opacity:1;width:25px;height:25px;position:absolute;background-color:#d0a8e8}.m-square.js--active{opacity:1}.m-square.m--white{background-color:#fff}.m-square.m--white.m--line{border-color:#fff!important}.m-square.m--back{z-index:auto}.m-square.m--line{background-color:transparent;border:2px solid #d0a8e8}.m-square.m--shadow{-webkit-box-shadow:2px 2px 5px rgba(0,0,0,.15);box-shadow:2px 2px 5px rgba(0,0,0,.15)}.m-we-do-alchemy__items .m-item_1{grid-area:item_1}.m-we-do-alchemy__items .m-item_2{grid-area:item_2;border-top:2px solid #fff;border-bottom:2px solid #fff}.m-we-do-alchemy__items .m-item_3{grid-area:item_3}.m-we-do-alchemy__items .m-item_4{grid-area:item_4}.m-we-do-alchemy__items .m-item_5{grid-area:item_5;border-top:2px solid #fff;border-bottom:2px solid #fff}.m-we-do-alchemy__items .m-item_6{grid-area:item_6}.m-page__formula{min-height:100vh;position:relative;background-color:#f7fcfc;background-size:100% 100%;background-position:bottom}.m-page__formula .m-flow{padding-top:62px}#formula__step_zero .m-container .m-formula>div{position:relative}#formula__step_zero .m-container .m-formula>div .m--one{right:0;top:-60px}#formula__step_zero .m-container .m-formula>div .m--two{top:-25px;right:60px}#formula__step_zero .m-container .m-formula>div .m--three{top:-50px;right:35px}#formula__step_zero .m-container .m-formula>div .m--four{top:80px;right:60px}#formula__step_zero .m-container .m-formula>div .m--five{top:55px;right:85px}#formula__step_zero .m-container .m-formula>div .m--six{left:30px}#formula__step_zero .m-container .m-formula>div .m--seven{left:5px;bottom:-49px}#formula__step_zero .m-container .m-formula>div .m--eight{left:55px;bottom:-74px}#formula__step_zero .m-container .m-formula>div .m--eleven{right:30px;bottom:-155px}#formula__step_zero .m-small{text-transform:uppercase}#formula__step_zero .m-title{max-width:300px;margin:60px auto}#formula__step_one .m-question{max-width:240px;margin:0 auto 20px}#formula__step_one .m-small{margin:0 0 35px}#formula__step_two .m-question{margin-bottom:30px}#formula__step_three .m-formula__content~p{margin:35px 0 0}#formula__step_three .m-question{margin-bottom:30px}#formula__step_three .m-question span{display:block}#formula__step_four .m-formula__options{grid-gap:0;gap:0;-ms-flex-pack:distribute;justify-content:space-around}#formula__step_four .m-formula__options .m-button{width:130px;margin:0 0 5px;min-width:130px}@media only screen and (min-width:360px){#formula__step_four .m-formula__options .m-button{width:160px;min-width:160px}}#formula__step_four .m-formula__options .m-button:last-child{margin:0}#formula__step_four .m-small{margin-bottom:15px}#formula__step_five .m-formula{margin:30px 0 0}#formula__step_five .m-formula__fragances{width:780px;display:-webkit-box;display:-ms-flexbox;display:flex;max-width:100%;text-align:center;margin:20px auto 0}#formula__step_five .m-formula__fragances .m-formula__fragance{width:50%;overflow:hidden;position:relative}#formula__step_five .m-formula__fragances .m-formula__fragance__specifications{left:50%;z-index:0;opacity:0;bottom:54%;width:167px;text-align:left;padding:6px 10px;border-radius:5px;position:absolute;background-color:#fff;-webkit-transform:translate(-50%,5px);-ms-transform:translate(-50%,5px);transform:translate(-50%,5px);-webkit-box-shadow:0 0 10px rgba(0,0,0,.3);box-shadow:0 0 10px rgba(0,0,0,.3)}#formula__step_five .m-formula__fragances .m-formula__fragance__specifications h4{margin:0;font-size:9px;font-size:.5625rem;padding:1px 5px;font-weight:700;line-height:12px;line-height:.75rem;border-radius:3px;display:inline-block;font-family:Roboto;letter-spacing:.1em;border:1px solid #000;text-transform:uppercase}#formula__step_five .m-formula__fragances .m-formula__fragance__specifications h5{padding:0;margin:5px 0;font-size:10px;font-size:.625rem;line-height:12px;line-height:.75rem;font-weight:400;font-family:Roboto;letter-spacing:.3em;text-transform:uppercase}#formula__step_five .m-formula__fragances .m-formula__fragance__specifications picture{width:34px;margin:-23px 0 0;display:inline-block;vertical-align:middle}#formula__step_five .m-formula__fragances .m-formula__fragance__specifications ul{width:70%;margin:0;display:inline-block;vertical-align:middle}#formula__step_five .m-formula__fragances .m-formula__fragance__specifications ul li{font-size:8px;font-size:.5rem;margin:0 0 2px;line-height:9px;line-height:.5625rem;font-weight:700;font-family:Roboto;letter-spacing:.15em;text-transform:uppercase}#formula__step_five .m-formula__fragances .m-formula__fragance__box{z-index:2;width:125px;position:relative;display:inline-block}#formula__step_five .m-formula__fragances .m-formula__fragance__box a{font-size:10px;font-size:.625rem;min-height:36px;height:auto;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;min-width:auto;width:116px;line-height:1.3;margin-bottom:0}#formula__step_five .m-formula__fragances .m-formula__fragance__box--image{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-bottom:5px}#formula__step_five .m-formula__fragances .m-formula__fragance__box--image img{max-height:35px;min-height:35px}#formula__step_five .m-formula .m-question{max-width:225px}.m-bottles{width:280px;margin:0 auto}.m-bottles__images{width:180px;height:205px;margin:0 auto 10px;position:relative;-webkit-transform:translate(15px);-ms-transform:translate(15px);transform:translate(15px)}.m-bottles__images picture{top:0;left:0;right:0;margin:0;opacity:0;width:180px;height:205px;position:absolute}.m-bottles__images picture.js--active{opacity:1}.m-bottles__buttons .m-question{display:none}.m-bottles__buttons a{width:50px;height:50px;margin:3px 8px;border-radius:100%;display:inline-block;background-color:#fff;-webkit-box-shadow:0 0 10px rgba(0,0,0,.05);box-shadow:0 0 10px rgba(0,0,0,.05)}.m-bottles__buttons a.m--light-blue{background-color:#98eafc}.m-bottles__buttons a.m--pink{background-color:#ffc4c8}.m-bottles__buttons a.m--orange{background-color:#ffc18e}.m-bottles__buttons a.m--green{background-color:#a6eda5}.m-bottles__buttons a.m--purple{background-color:#e0c3ea}.m-bottles__buttons a.m--yellow{background-color:#fde29d}.m-bottles__buttons a span{display:none}#formula__step_nine .m-formula__picture{width:40%;max-width:180px;display:inline-block;vertical-align:middle}#formula__step_nine .m-formula__text{margin:0 0 0 20px;width:49%;font-size:13px;font-size:.8125rem;text-align:left;line-height:15px;line-height:.9375rem;display:inline-block;vertical-align:middle}#formula__step_nine .m-formula__properties__property span{font-size:13px;font-size:.8125rem;line-height:13px;line-height:.8125rem}#formula__step_nine .m-formula__buttons{grid-gap:10px;gap:10px;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-pack:distribute;justify-content:space-around}#formula__step_nine .m-formula__buttons .m-button{width:130px;height:60px;min-width:170px;line-height:60px;line-height:3.75rem}#formula__step_ten .m-formula{top:0;left:0;width:auto;position:relative;-webkit-transform:translate(0);-ms-transform:translate(0);transform:translate(0)}#formula__step_ten .m-formula__cards__card .card-products{width:56px;height:114px;position:relative;-ms-flex-negative:0;flex-shrink:0;max-width:80px}#formula__step_ten .m-formula__cards__card .card-products picture{top:0;left:0;right:0;margin:0;opacity:0;width:100%;height:auto;position:absolute}.m-hair-conditions .m-modal__container{padding:30px}.m-hair-conditions .m-modal__close{border:none}.m-hair-conditions .m-modal__close:after,.m-hair-conditions .m-modal__close:before{width:30px}.m-hair-conditions h2{font-size:28px;font-size:1.75rem;font-weight:500;font-style:normal}.m-hair-conditions .m-modal__hairconditions{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.m-hair-conditions .m-modal__hairconditions__item{display:-webkit-box;display:-ms-flexbox;display:flex;margin-top:17px;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.m-hair-conditions .m-modal__hairconditions__item:last-of-type{margin-bottom:0}.m-hair-conditions .m-modal__hairconditions__item .m-modal__hairconditions__image{-webkit-box-flex:30%;-ms-flex:30% 0 0px;flex:30% 0 0;margin-right:8px}.m-hair-conditions .m-modal__hairconditions__item .m-modal__hairconditions__text{-webkit-box-flex:65%;-ms-flex:65% 0 0px;flex:65% 0 0;text-align:left}.m-hair-conditions .m-modal__hairconditions__item .m-modal__hairconditions__text h4{font-size:10px;font-size:.625rem;margin-bottom:0;padding-bottom:10px;letter-spacing:.15em;text-transform:uppercase;font-family:Roboto,sans-serif;border-bottom:1px solid #000}.m-hair-conditions .m-modal__hairconditions__item .m-modal__hairconditions__text ul{margin-top:10px}.m-hair-conditions .m-modal__hairconditions__item .m-modal__hairconditions__text p,.m-hair-conditions .m-modal__hairconditions__item .m-modal__hairconditions__text ul li{font-size:10px;font-size:.625rem;font-family:Roboto,sans-serif}.m-hair-conditions .m-modal__hairconditions__item .m-modal__hairconditions__text p{margin-top:10px}#modal-add-cart .m-modal__container{max-width:450px}#modal-add-cart h2{font-size:25px;font-size:1.5625rem;line-height:30px;line-height:1.875rem;margin:30px 0 10px}#modal-add-cart p{margin:0 0 20px}#modal-add-cart .m-button{width:200px;display:block;margin:0 auto 20px}</style>';
    }

    wp_enqueue_style ('style', get_template_directory_uri() . '/style.css', array(), date('dmyhis'));
}

add_action ('wp_enqueue_scripts', 'mnk_theme_styles');
