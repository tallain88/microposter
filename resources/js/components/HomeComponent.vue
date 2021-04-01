<template>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Welcome {{user.username}}</h1>
        </div>
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">
                    title
                </h1>
                <p class="lead my-3">
                    placeholder text describing post
                </p >
                <p class="lead mb-0 " >
                    <a class="text-white font-weight-bold" href="">Go to post...</a>
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                
            </div>
            <div class="col-lg-2">
                <button type="button" class="btn btn-primary btn-lg">View Posts</button>
            </div>
            <div class="col-lg-2">
                <button type="button" class="btn btn-primary btn-lg" v-on:click="newPost">Create New</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'user',
        ],

        data: () => ({


        }),
        mounted() {
            console.log('Component mounted.')
            console.log(this.user);
        },

        methods: {
            newPost: function() {
                axios.post('/post')
                .then(function(response) {

                });

            },

        
        }
    }
</script>
