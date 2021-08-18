import { useEffect } from "react";

export const UseCropItemFetch = (url, callback)=>{

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