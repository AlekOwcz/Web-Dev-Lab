import React from "react"

export default function Task({id, text, isChecked, onToggleCompleted}){
    const handleOnChange = () => {
        onToggleCompleted(id)
    }
    
    return (
        <div key={id}>
            <input type="checkbox" 
            defaultChecked={isChecked} 
            onChange={handleOnChange}/>
            <span style={{textDecoration: isChecked ? 
                'line-through' : 'none'}}>
                {text}
            </span>
        </div>
    )
}