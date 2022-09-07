//Elements
let todoInput = document.getElementById("todoInput");
let submitBtn = document.getElementById("submitBtn");
let todos = document.getElementById("todos");
let todosNb = document.getElementById("todosNb");
let deleteAllBtn = document.getElementById("deleteAll");

//Compteur de TODOs
let nbTodos = 0;

//Fonctions
const createDeleteBtn = () => {
    let deleteButton = document.createElement("div");
    deleteButton.classList.add("btn");
    deleteButton.innerHTML = '<ion-icon name=\"trash-outline\"></ion-icon>';

    //Event suppression
    deleteButton.addEventListener("click", deleteTodo);

    return deleteButton;
}

const deleteAll = () => {
    todos.innerHTML = "";
    nbTodos = 0;
    todosNb.innerText = nbTodos;
}

const addTodo = () => {
    //Création d'un TODO
    let todoText = todoInput.value;
    if(todoText === "") return;

    let newTodo = document.createElement("div");
    newTodo.classList.add("todo");
    newTodo.innerHTML = `<p>${todoText}</p>`;

    newTodo.appendChild(createDeleteBtn());

    //Ajout du TODO à la liste
    todos.appendChild(newTodo);
    todoInput.value = "";
    nbTodos++;
    todosNb.innerText = nbTodos;
};

const deleteTodo = (e) => {
    //Cibler div parente ayant la classe todo
    let todoEl = e.target.closest("div.todo");
    todoEl.remove();
    nbTodos--;
    todosNb.innerText = nbTodos;
}

submitBtn.addEventListener("click", addTodo);
deleteAllBtn.addEventListener("click", deleteAll);
