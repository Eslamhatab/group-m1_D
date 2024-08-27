        //1 function => get posts $ Fetch Url 
            //Try => .then .catch Error 
        async function getPosts(){
            //Url In Varaible step(1)
            let url ="https://jsonplaceholder.typicode.com/posts";
            //check Url Using Fetch 
            const respone = await fetch(url),
            // data => Respone => Json
            data = await respone.json();
            return data;
        }

        // Call Function Get Posts
        getPosts();


        // display  Posts In to card
        async function displayPostsInToCard(){
                const posts = await getPosts(),
                    row = document.querySelector('.row');
                    for(let post of posts){
                        row.innerHTML += `
                            <div class="col-lg-4 col-md-12">
                            <div class="card text-center">
                            <div class="card-header">
                                ${post.title}
                            </div>
                            <div class="card-body">
                            <h5 class="card-title"> 
                            Post Id = ${post.id}</h5>
                            <p class="card-text"> ${post.body}</p>
                            <a href="https://jsonplaceholder.typicode.com/posts" class="btn btn-primary">Go Json Placeholder</a>
                            </div>
                        </div>
                            </div>
                        `
                    }
        }
        displayPostsInToCard()
