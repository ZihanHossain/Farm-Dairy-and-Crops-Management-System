import { useEffect } from "react";

export const UseCartFetch = (url, callback)=>{

    const getData = async ()=>{
        const response = await fetch(url);
        const data = await response.json();
        callback(data);
        console.log(data);
    }

    useEffect(()=>{
        getData();
    }, [])
}