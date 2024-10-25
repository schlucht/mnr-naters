<template>
    <header>
    <div class="hamburger">
      <input type="checkbox" checked id="openNav">
      <label for="openNav">
        <span></span>
      </label>
    </div>
    <nav class="mobile-nav">
      <div class="nav-close">
        <span></span>
      </div>
      <ul class="nav-mobile-main" role="list">
        <li><router-link class="link link-white" to="/">Gemeinde</router-link></li>
        <li><router-link class="link link-white" to="https://gemeinde.mnr.ch/termine/">Termine (Dübendorf)</router-link></li>
        <li><router-link class="link link-white" to="#">Gottesdienste</router-link></li>
        <li><router-link class="link link-white" to="#">Bibel/Gebetsstunde</router-link></li>
        <li><router-link class="link link-white" to="/admin">Admin</router-link></li>
      </ul>
    </nav>
    <div class="brand">
      <router-link to="/">
        <img src="../assets/logos/mnr.svg" alt="logo">
      </router-link>
      <div class="header-title">
        <h1>Evangelische Gemeinde</h1>
        <h3>Mitternachtsruf Naters</h3>
      </div>      
    </div>
    <div class="site-info">
      <p>
        Willkommen auf der Webseite der freien evangelischen Gemeinde Mitternachtsruf Naters.
      </p>
      <a class="link link-white" href="https://www.mnrbern.ch/ueber-uns/glaubensbekenntnis/">
        unser glaubensbekenntnis >
      </a>     
    </div>
    <nav class="page-nav">
      <ul class="nav-main" role="list">
        <li><router-link class="link link-white" to="/">Gemeinde</router-link></li>
        <li><router-link class="link link-white" to="https://gemeinde.mnr.ch/termine/">Termine (Dübendorf)</router-link></li>
        <li><router-link class="link link-white" to="#">Gottesdienste</router-link></li>
        <li><router-link class="link link-white" to="#">Bibel/Gebetsstunde</router-link></li>
        <li><router-link class="link link-white" to="/admin">Admin</router-link></li>
      </ul>
    </nav>
  </header>
</template>
<script lang="ts">
  import {RouterLink} from "vue-router";
</script>
<style scoped>
.site-info {
    text-align: center;
    color: var(--fc-white);
    height: 20rem;
    margin-right: 10rem;
    transition: all .5s;

    & p {
      font-size: 2.6rem;

        @media screen {  
            font-size: 2.0rem;
        }

        @media screen {   
            font-size: 1.6rem;
        }
    }

  & p {
    font-family: var(--ff-serif),serif;
  }

  & a {
        font-size: 3.5rem;

        @media screen {  
            font-size: 2.5rem;
        }

        @media screen {  
            font-size: 2.0rem;
        }
    }
}

.brand {
    margin-bottom: 12rem;
    text-align: left;
    display: flex;

    & img {
        display: inline-block;
        width: 8rem;
        height: auto;
        margin-right: 1rem;
    }
}

.header-title h1,
h3 {
    color: var(--fc-white);
    text-wrap: nowrap;

    @media screen {    
    
        text-wrap: wrap;
    }
}

.header-title h1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 0;

    @media screen {  
        font-size: 3.2rem;
        line-height: 2.3rem;
    }

    @media screen {  
        font-size: 2.8rem;
        line-height: 2.3rem;
    }
}

.header-title h3 {
    font-size: 4rem;
    font-family: var(--ff-serif),serif;
    font-weight: 300;
    text-align: left;
    line-height: 2.6rem;
}

.hamburger {
    display: none;
    position: absolute;
    top: 3rem;
    right: 10rem;

    @media screen {  
        display: block;
    }

    & label {
        cursor: pointer;
    }

    & #openNav:checked .page-nav {
        
    }

    & label span {
        display: block;
        position: relative;
        height: 2px;
        width: 24px;
        background-color: var(--fc-white);
        text-align: center;

        &::before {
            content: '';
            position: absolute;
            height: 2px;
            top: -7px;
            left: 2px;
            right: 2px;
            bottom: auto;
            background-color: var(--fc-white);
            border-radius: 2px;
        }

        &::after {
            content: '';
            position: absolute;
            height: 2px;
            bottom: 0px;
            left: 2px;
            right: 2px;
            top: 7px;
            background-color: var(--fc-white);
            border-radius: 2px;
        }
    }
}

/*************************************************************/
/*
/** Navigation
/*
/*************************************************************/

.page-nav {
    margin-top: 12rem;

    @media screen {  
        display: none;
    }

    & ul {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }

    & ul li>a {
        font-size: 2.2rem;
        font-weight: 800;
    }
}

.mobile-nav {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--clr-green);
    display: none;
    flex-direction: column;
    justify-content: start;
    align-items: center;
    padding: 30% 2rem;
}

.open-nav {
    display: flex;
}

.mobile-nav ul {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.mobile-nav .nav-close {
    height: 36px;
    width: 36px;
    color: var(--fc-white);
    background-color: #127b40;
    cursor: pointer;
    position: absolute;
    top: 12px;
    right: 10%;

    & span {
        position: relative;
    }

    & span::before {
        position: absolute;
        content: '';
        height: 2px;
        width: 26px;
        transform: rotate(45deg);
        background-color: var(--fc-white);
        left: -13px;
        top: 18px;
        right: 0;
        bottom: auto;
    }

    &span::after {
        position: absolute;
        content: '';
        height: 2px;
        width: 26px;
        transform: rotate(-45deg);
        background-color: var(--fc-white);
        left: -13px;
        top: 18px;
        right: 0;
        bottom: auto;
    }
}
</style>