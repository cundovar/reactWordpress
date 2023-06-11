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
           <div className=" w-4/5 m-auto flex justify-between align-middle flex-wrap gap-10">
       {
        posts && posts.map((post)=>{
           return (

            <div key={post.id} className=" card p-3 w-96 shadow-lg" >
                <h2 className="text-lg font-bold">{post.title.rendered} </h2>
                {/*dangerouslySetInnerHTML pour retirer les balise p intempestive  */}
                <p dangerouslySetInnerHTML={{__html : post.excerpt.rendered}}></p>
            </div>

)
})
}
</div>
        </>
    )
}

export default Posts