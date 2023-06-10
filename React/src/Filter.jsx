import React from "react"

export default function Filter(props) {
    return(
        <>
        <label>
            <input 
                type="checkbox" 
                defaultChecked={props.hideCompleted} 
                onChange={props.ontoggleHideCompleted}
            /> Hide completed
        </label>
        </>
    )
}