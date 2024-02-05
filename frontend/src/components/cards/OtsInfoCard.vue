<template>
    <article class="info-card-content">
        <div class="info-card-header">
            <a class="green">
                Information
            </a>
        </div>
        <div class="info-card-info">
            <h2>Gemeinde Mitternachtsruf in Naters</h2>
            <p>Zum Gottesdienst und zur Bibel- und Gebetsstunde treffen wir uns regelmässig im Fotostudio Fux
                Furkastrasse 26.
                Wir freuen uns auf Ihren Besuch oder Ihre Kontaktaufnahme.</p>
        </div>
        <div class="info-card-footer">
            <a class="green more">
                Mehr<span class="more-icon">></span>
            </a>
        </div>
    </article>
</template>
<style scoped>
.info-card-content { 
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: var(--color-grey-light);
    padding: 2rem 0;
    border-top: 1px solid var(--color-light);
    border-bottom: 1px solid var(--color-light);
    padding-left: 2rem;

    min-width: 35rem;

    & .info-card-info {
        flex: 2 auto;

        & h2 {
            font-size: 2.8rem;
            margin: 0;
            margin-bottom: 1rem;
        }

        & p {
            font-size: 1.9rem;
            margin: 0;
        }
    }

    & .info-card-header {
        flex: 1 auto;
    }

    & .info-card-footer {
        flex: 1 auto;
    }
}
</style>