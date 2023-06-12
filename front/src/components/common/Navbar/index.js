import React from "react";
import { Link } from "react-router-dom";

const Navbar=()=>{


    return(
         <div className="p-5">
          <ul className="flex gap-5 justify-end">
            <li><Link to='/'>accueil</Link> </li>
            <li><Link to='/posts'>posts</Link> </li>
       
          
          </ul>
         </div>
    )
}


export default Navbar