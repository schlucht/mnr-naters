<template>
    <footer class="footer-page container">
        <div class="footer-nav ">
            <div class="nav-left-links">
                <router-link to="/">Home</router-link>
                <router-link to="/">About</router-link>
                <router-link to="/">Contact</router-link>
                <router-link to="/">Admin</router-link>
            </div>
            <div class="nav-right-links">
                <a href="https://gemeinde.mnr.ch/">Gemeinde Dübendorf</a>
                <a herf="https://www.mnrbern.ch/">Gemeinde Bern</a>
                <a herf="https://www.mnrbern.ch/">Gemeinde Naters</a>
                <a herf="https://www.gbsm.ch/">GBSM</a>
                <a herf="https://beth-shalom.reisen/">Israelreisen</a>
                <a herf="https://sz-zion.ch/">Seniorenzentrum Zion</a>
                <a herf="https://sz-zion.ch/">Datenschutzbestimmungen</a>
            </div>
        </div>
        <p>&copy; {{ new Date().getFullYear() }} OTS - MNR-NATERS</p>
    </footer>
</template>
<style scoped>
.footer-page {
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    color: var(--color-white);
    font-size: 1.6rem;
}

.footer-nav {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 60%;
    padding: .5rem 0;
    font-size: 1.8rem;

}

.nav-left-links {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flext-start;
    width: 50%;
    padding-left: 0rem;
}

.nav-right-links {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: flext-start;
    width: 50%;
    padding-right: 20rem;
}

.footer-page p {
    margin: 0;
    padding: 0;
    padding-left: 2rem;
}
</style>
