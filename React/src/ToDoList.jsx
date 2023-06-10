import React from "react";
import Task from './Task'

export default function ToDoList(props) {

    return(
        <>
        {props.tasks.map((task) => (
            <Task key={task.id} id={task.id} text={task.text} isChecked={task.isCompleted} onToggleCompleted={props.onToggleTaskCompleted}/>
            ))}        
        </>
    )
}