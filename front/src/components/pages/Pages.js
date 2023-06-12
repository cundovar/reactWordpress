import React from "react";
import Home from "./Home";
import Posts from "./Posts"
import Navbar from "../common/Navbar";
import { Routes,Route } from 'react-router-dom';
import Single from "../Single";
const Pages = () => {
  return (
    <>
     <Navbar/>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/posts" element={<Posts />} />
        <Route path="/posts/:id" element={<Single/>} />
      </Routes>
    </>
  );
};

export default Pages;
