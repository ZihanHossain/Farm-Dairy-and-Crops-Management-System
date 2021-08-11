import { useEffect } from "react";

export const useEditStaffFetch = (url, callback, callback1, callback2, callback3, callback4, callback5, callback6, callback7, callback8)=>{

    const getData = async ()=>{
        const response = await fetch(url);
        const data = await response.json();
        console.log(data);
        callback(data[0][0].name);
        callback1(data[1][0].user_name);
        callback2(data[1][0].password);
        callback3(data[0][0].type);
        callback4(data[0][0].email);
        callback5(data[0][0].salary);
        callback6(data[0][0].gender);
        callback7(data[0][0].sh_id);
        callback8(data[2]);
    }

    useEffect(()=>{
        getData();
    }, [])
}