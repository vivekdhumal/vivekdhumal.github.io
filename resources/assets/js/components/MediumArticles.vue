<template>
    <div class="mt-2">
        <div v-if="loading" class="text-xl">
            Loading articles...
        </div>
        <article v-else v-for="article in formatedArticles" class="mb-4 bg-white shadow rounded border-l-4 border-blue p-4">
            <h5 class="text-lg"><a :href="article.link" class="text-blue no-underline" target="_blank">{{ article.title }}</a></h5>
            <p class="text-sm text-grey-darker">{{ article.pubDate }}</p>
        </article>
    </div>
</template>

<script>
    import moment from 'moment';

    export default {
        data() {
            return {
                articles: [],
                loading: false
            }
        },
        computed: {
            formatedArticles () {
                return this.articles[0].map( (article) => {
                    article.pubDate = moment(article.pubDate).format("MMM DD, YYYY")
                    return article
                });
            }
        },
        mounted() {
            console.log('Component mounted.');
            this.loading = true;
            axios.get("https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@vivekdhumal")
            .then(data => {
                this.loading = false;
                console.log(data.data.items);
                if(data.data.status == "ok") {
                    console.log(data.data.status);
                    this.articles.push(data.data.items);
                }

                console.log(this.articles);
            });
        }

    }
</script>
