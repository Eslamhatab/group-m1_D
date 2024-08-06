        //1 function => get posts $ Fetch Url 

        async function getPosts(){
            //Url In Varaible step(1)
            let url ="https://jsonplaceholder.typicode.com/posts";
            //check Url Using Fetch 
            const respone = await fetch(url),
            // data => Respone => Json
            data = await respone.json();
            console.log(data);
        }

        // Call Function Get Posts
        getPosts();






        // display  Post In to card