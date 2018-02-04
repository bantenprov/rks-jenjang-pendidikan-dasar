# rks-jenjang-pendidikan-dasar

[![Join the chat at https://gitter.im/rks-jenjang-pendidikan-dasar/Lobby](https://badges.gitter.im/rks-jenjang-pendidikan-dasar/Lobby.svg)](https://gitter.im/rks-jenjang-pendidikan-dasar/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/rks-jenjang-pendidikan-dasar/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rks-jenjang-pendidikan-dasar/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/rks-jenjang-pendidikan-dasar/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rks-jenjang-pendidikan-dasar/build-status/master)

Rasio Ketersediaan Sekolah (RKS) Jenjang Pendidikan Dasar

## install via composer

- Development snapshot
```bash
$ composer require bantenprov/rks-jenjang-pendidikan-dasar:dev-master
```
- Latest release:

```bash
$ composer require bantenprov/rks-jenjang-pendidikan-dasar:v0.1.0
```

## download via github
~~~
bash
$ git clone https://github.com/bantenprov/rks-jenjang-pendidikan-dasar.git
~~~


#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\RKSJePenDas\RKSJePenDasServiceProvider::class,

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=rks-jenjang-pendidikan-dasar-assets
$ php artisan vendor:publish --tag=rks-jenjang-pendidikan-dasar-public
```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/rks-jenjang-pendidikan-dasar',
    components: {
      main: resolve => require(['./components/views/bantenprov/rks-jenjang-pendidikan-dasar/DashboardRKSJePenDas.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "RKS Jenjang Pendidikan Dasar"
    }
  }
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
      path: '/admin/dashboard/rks-jenjang-pendidikan-dasar',
      components: {
        main: resolve => require(['./components/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDasAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "RKS Jenjang Pendidikan Dasar"
      }
    }
 //== ...   
  ]
},

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'RKS Jenjang Pendidikan Dasar',
          link: '/dashboard/rks-jenjang-pendidikan-dasar',
          icon: 'fa fa-angle-double-right'
        }
  ]
},

```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import RKSJePenDas from './components/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDas.chart.vue';
Vue.component('echarts-rks-jenjang-pendidikan-dasar', RKSJePenDas);

import RKSJePenDasKota from './components/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDasKota.chart.vue';
Vue.component('echarts-rks-jenjang-pendidikan-dasar-kota', RKSJePenDasKota);

import RKSJePenDasTahun from './components/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDasTahun.chart.vue';
Vue.component('echarts-rks-jenjang-pendidikan-dasar-tahun', RKSJePenDasTahun);

import RKSJePenDasAdminShow from './components/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDasAdmin.show.vue';
Vue.component('admin-view-rks-jenjang-pendidikan-dasar-tahun', RKSJePenDasAdminShow);

//== Echarts Angka Partisipasi Kasar

import RKSJePenDasBar01 from './components/views/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDasBar01.vue';
Vue.component('rks-jenjang-pendidikan-dasar-bar-01', RKSJePenDasBar01);

import RKSJePenDasBar02 from './components/views/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDasBar02.vue';
Vue.component('rks-jenjang-pendidikan-dasar-bar-02', RKSJePenDasBar02);

//== mini bar charts
import RKSJePenDasBar03 from './components/views/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDasBar03.vue';
Vue.component('rks-jenjang-pendidikan-dasar-bar-03', RKSJePenDasBar03);

import RKSJePenDasPie01 from './components/views/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDasPie01.vue';
Vue.component('rks-jenjang-pendidikan-dasar-pie-01', RKSJePenDasPie01);

import RKSJePenDasPie02 from './components/views/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDasPie02.vue';
Vue.component('rks-jenjang-pendidikan-dasar-pie-02', RKSJePenDasPie02);

//== mini pie charts
import RKSJePenDasPie03 from './components/views/bantenprov/rks-jenjang-pendidikan-dasar/RKSJePenDasPie03.vue';
Vue.component('rks-jenjang-pendidikan-dasar-pie-03', RKSJePenDasPie03);
```

