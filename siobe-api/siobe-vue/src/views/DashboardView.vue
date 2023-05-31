<template>
    <div class="navbar">
        <ul>
            <li><a>Dashboard</a></li>
            <li><a>Course</a></li>
        </ul>
    </div>

    <div class="dashboard">
      <h1 style="color: white;">Welcome to si-obe</h1>
      <div class="widgets">
        <div class="widget">
          <h2>Sistem Informasi Geografi</h2>
          <p>Dany Primanita Kartikasari</p>
        </div>
        <div class="widget">
          <h2>Pemrogaman Web Lanjut</h2>
          <p>Andri Santoso</p>
        </div>
        <div class="widget">
          <h2>Pemrograman Basis Data</h2>
          <p>Welly Purnomo</p>
        </div>
      </div>
    </div>
  </template>
  
  <style>
    .navbar {
    background-color: 'white';
    }

    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    }

    li {
    display: inline-block;
    }

    a {
    display: block;
    padding: 10px 20px;
    color: #fff;
    border-radius: 20px;
    text-decoration: none;
    }

    a:hover {
    background-color: #154c79;
    }

  .dashboard {
    background-color: #2596be;
    padding: 60px;
  }
  
  .widgets {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 24px;
  }
  
  .widget {
    background-color: #fff;
    padding: 60px;
    border-radius: 30px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  .widget h2 {
    margin-top: 0;
  }
  
  .widget p {
    margin-bottom: 0;
  }
  </style>
  