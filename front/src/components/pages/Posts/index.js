import React, {  useEffect, useState } from "react";
import axios from 'axios';
import { Link } from "react-router-dom";

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
        <div className="text-2xl font-bold">
        posts
        </div>
           <div className=" w-4/5 m-auto flex justify-between align-middle flex-wrap gap-10">
       {
    Object.keys(posts).length ? posts.map((post)=>{
           return (

            <div key={post.id} className=" card p-3 w-96 shadow-lg" >
                <Link to={ `/posts/${post.id}`}>
                <h2 className="text-lg font-bold">{post.title.rendered} </h2>
                {/*dangerouslySetInnerHTML pour retirer les balise p intempestive  */}
                <p dangerouslySetInnerHTML={{__html : post.excerpt.rendered}}></p>
                </Link>
            </div>

)
}):'loading....'
}
</div>
        </>
    )
}

export default Posts