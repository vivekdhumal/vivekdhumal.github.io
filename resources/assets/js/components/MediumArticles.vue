<template>
    <div class="mt-4">
        <div v-if="loading" class="text-md">
            Loading articles...
        </div>
        <article v-else v-for="article in formatedArticles" class="mb-2 pt-4">
            <h5 class="text-md"><a :href="article.link" class="text-teal no-underline" target="_blank">{{ article.title }}</a></h5>
            <p class="mb-6 text-sm">{{ article.pubDate }}</p>
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
