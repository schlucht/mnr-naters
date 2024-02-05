<template>
    <header>
        <h1>MNR - NATERS
            <span>Mitternachtsruf Dübendorf</span>
        </h1>
        <nav>
            <ul>
                <li><router-link to="/">Home</router-link></li>
                <li><router-link to="/">About</router-link></li>
                <li><router-link to="/">Contact</router-link></li>
                <li><router-link to="/">Admin</router-link></li>
            </ul>
            <ul>
                <li><router-link to="/">Anmelden</router-link></li>
                <li><router-link to="/">Registrieren</router-link></li>
            </ul>
        </nav>
    </header>
</template>
<style scoped>
header {
    background-color: var(--color-primary);
    color: var(--color-white);
    padding: 10px 0;
    text-align: center;
}

header h1 {
    margin: 0;
}

header h1 span {
    font-size: 0.6em;
}

header nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

header nav ul li {
    display: inline;
    margin: 0 10px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
}

header nav ul li a:hover {
    text-decoration: underline;
}</style>