<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Eric Northman</div>

                    <div class="card-body">
                      This is where we will talk about Eric.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
      props: ['vampire'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
