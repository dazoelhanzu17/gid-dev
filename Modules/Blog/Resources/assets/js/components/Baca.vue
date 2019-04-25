<template>
    
                <div class="card blog-horizontal blog-horizontal-xs">
                    <!-- <div class="card-header">Example Component</div> -->

                   <div class="card-body">
                    
                     <div class="mb-4">
                      <div class="mb-3 text-center">
                        <a href="#" class="d-inline-block">
                          <img alt="" class="img-fluid" src="images/blog_post/1556081622hello-world-4k-0o.jpg">
                        </a>
                      </div>

                      <h4 class="font-weight-semibold mb-1">
                        <a href="#" class="text-default">{{ blog.blog_name }}</a>
                      </h4>

                      <ul class="list-inline list-inline-dotted text-muted mb-3">
                        <li class="list-inline-item">By <a href="#" class="text-muted">{{ blog.create_author }}</a></li>
                        <li class="list-inline-item">{{ blog.created_at }}</li>
                        <li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-heart6 font-size-base text-pink mr-2"></i> 281</a></li>
                      </ul>

                      <div class="mb-3">
                        <p v-html="blog.blog_desc"></p>
                      </div>

                    </div>

                    </div>
                 
                </div>
</template>

<script>
    export default {
        data(){
          return{
            blog: {},
            urll: "api/blog/"+this.$route.query.id+"/read",
          }
        },
        methods: {
          
          loadBlog(){
              this.$Progress.start()
              axios.get('http://localhost:8000/api/berita/'+this.$route.query.id+'/baca')
              .then(({ data }) => {
                
                this.blog = data.data ;
                this.$Progress.finish()
              })
              .catch(() => {
                this.$Progress.fail();
              })
          
          },
        },
        mounted() {
            console.log('Component mounted.')
            console.log(this.urll)
        },

        created() {
            this.loadBlog();
            Fire.$on('AfterCreated', () => {
              this.loadBlog();
            });
            // setInterval(() => this.loadUsers(), 3000);
        }
    }
</script>