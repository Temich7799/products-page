import React from 'react';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import ProductList from './components/ProductList/ProductList/ProductList';
import ProductAdd from './components/ProductAdd/ProductAdd';
import Footer from './components/main/Footer/Footer';
import './App.scss';

const App = () => {
    return (
        <>
            <BrowserRouter>
                <Routes>
                    <Route path="/" element={<ProductList />} />
                    <Route path="add-product" element={<ProductAdd />} />
                </Routes>
            </BrowserRouter>
            <Footer />
        </>
    )
}

export default App;
