import { useEffect } from "react";

export const useProfileSettingsFetch = (url, callback, callback1, callback2, callback3)=>{

    const getData = async ()=>{
        const response = await fetch(url);
        const data = await response.json();
        callback(data[0].name);
        callback1(data[1].user_name);
        callback2(data[1].password);
        callback3(data[0].email);
        // console.log(data[0]);
        // console.log(data[1]);
        // console.log(data[2]);
    }

    useEffect(()=>{
        getData();
    }, [])
}