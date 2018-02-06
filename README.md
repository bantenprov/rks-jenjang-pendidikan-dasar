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
    Bantenprov\RKSJenPenDas\RKSJenPenDasServiceProvider::class,

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=rks-jen-pen-das-assets
$ php artisan vendor:publish --tag=rks-jen-pen-das-public
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
    path: '/dashboard/rks-jen-pen-das',
    components: {
      main: resolve => require(['./components/views/bantenprov/rks-jen-pen-das/DashboardRKSJenPenDas.vue'], resolve),
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
      path: '/admin/dashboard/rks-jen-pen-das',
      components: {
        main: resolve => require(['./components/bantenprov/rks-jen-pen-das/RKSJenPenDasAdmin.show.vue'], resolve),
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
          link: '/dashboard/rks-jen-pen-das',
          icon: 'fa fa-angle-double-right'
        }
  ]
},

```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import RKSJenPenDas from './components/bantenprov/rks-jen-pen-das/RKSJenPenDas.chart.vue';
Vue.component('echarts-rks-jen-pen-das', RKSJenPenDas);

import RKSJenPenDasKota from './components/bantenprov/rks-jen-pen-das/RKSJenPenDasKota.chart.vue';
Vue.component('echarts-rks-jen-pen-das-kota', RKSJenPenDasKota);

import RKSJenPenDasTahun from './components/bantenprov/rks-jen-pen-das/RKSJenPenDasTahun.chart.vue';
Vue.component('echarts-rks-jen-pen-das-tahun', RKSJenPenDasTahun);

import RKSJenPenDasAdminShow from './components/bantenprov/rks-jen-pen-das/RKSJenPenDasAdmin.show.vue';
Vue.component('admin-view-rks-jen-pen-das-tahun', RKSJenPenDasAdminShow);

//== Echarts Angka Partisipasi Kasar

import RKSJenPenDasBar01 from './components/views/bantenprov/rks-jen-pen-das/RKSJenPenDasBar01.vue';
Vue.component('rks-jen-pen-das-bar-01', RKSJenPenDasBar01);

import RKSJenPenDasBar02 from './components/views/bantenprov/rks-jen-pen-das/RKSJenPenDasBar02.vue';
Vue.component('rks-jen-pen-das-bar-02', RKSJenPenDasBar02);

//== mini bar charts
import RKSJenPenDasBar03 from './components/views/bantenprov/rks-jen-pen-das/RKSJenPenDasBar03.vue';
Vue.component('rks-jen-pen-das-bar-03', RKSJenPenDasBar03);

import RKSJenPenDasPie01 from './components/views/bantenprov/rks-jen-pen-das/RKSJenPenDasPie01.vue';
Vue.component('rks-jen-pen-das-pie-01', RKSJenPenDasPie01);

import RKSJenPenDasPie02 from './components/views/bantenprov/rks-jen-pen-das/RKSJenPenDasPie02.vue';
Vue.component('rks-jen-pen-das-pie-02', RKSJenPenDasPie02);

//== mini pie charts
import RKSJenPenDasPie03 from './components/views/bantenprov/rks-jen-pen-das/RKSJenPenDasPie03.vue';
Vue.component('rks-jen-pen-das-pie-03', RKSJenPenDasPie03);
```

