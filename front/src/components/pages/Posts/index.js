import React, {  useEffect, useState } from "react";
import axios from 'axios';

const Posts=()=>{
      
    
    const [posts,setPosts]=useState([]);
    useEffect(()=>{
   
        let url= 'http://localhost/wp-back/wp-test/wordpress/wp-json/wp/v2/posts'
         axios.get(url)
         .then((res)=>{

             console.log(res.data)
             setPosts(res.data)
         })

    },[])

console.log('posts',posts)

    return(
        <>
       {
        posts && posts.map((post)=>{
           return (
            <div key={post.id}>
                <h2 className="text-3xl font-bold underline">{post.title.rendered} </h2>
                {/*dangerouslySetInnerHTML pour retirer les balise p intempestive  */}
                <p dangerouslySetInnerHTML={{__html : post.excerpt.rendered}}></p>
            </div>
           )
})
       }
        </>
    )
}

export default Posts