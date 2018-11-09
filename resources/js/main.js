window.onload = function() {

    let cantidadTareasAAgregar = 0;
    const appTitle = document.querySelector('h1');
    const toolTips = document.querySelector('#tooltips');
    const taskPendingCounter = document.createElement('h2');
    taskPendingCounter.classList.add('tasks-done-counter');
    toolTips.prepend(taskPendingCounter);
    const tasksDoneCounter = document.createElement('h2');
    tasksDoneCounter.classList.add('tasks-done-counter');
    toolTips.prepend(tasksDoneCounter);
    console.log(tasksDoneCounter);
    let confirmed;
    let tareas = [];
    let tareasRealizadas = [];
    const taskUl = document.querySelector('#task-list');

    while(!confirmed){
        do{
            cantidadTareasAAgregar = prompt('Inidque la cantidad de tareas que desea programar.');
            if(isNaN(parseInt(cantidadTareasAAgregar)) || cantidadTareasAAgregar <= 0){
                alert('La cantidad de tareas debe ser un numero entero mayor a 0.');
            }
        }while(isNaN(parseInt(cantidadTareasAAgregar)) || cantidadTareasAAgregar <= 0);

        confirmed = confirm('Desea programar '+cantidadTareasAAgregar+' tarea(s)?');
    }


    for(let i = 0; i < cantidadTareasAAgregar; i++){
        var nuevaTarea = {  "titulo" : "",
        "contenido" : ""
    };
    do{
            console.log('do');
            var titulo = prompt('Titule su tarea N° '+(i+1));
            nuevaTarea.titulo = titulo;
            tareas.push(nuevaTarea);
        } while (titulo == '' || titulo == null);
    }

    for(let i = 0; i < tareas.length; i++){
        console.log('do2');
        let newLi = document.createElement('li');
        let newCloseBtn = document.createElement('span');
        newLi.classList.add('task');
        newLi.innerHTML = '<h3>'+tareas[i].titulo+'</h3>';
        newCloseBtn.classList.add('x-button');
        newCloseBtn.innerHTML = 'x';
        newLi.append(newCloseBtn);
        console.log(newLi, taskUl, newCloseBtn);
        taskUl.append(newLi);
        console.log(newLi, taskUl);
        console.log(newCloseBtn);

        newCloseBtn.addEventListener('click', function(){
            console.log(this);
            this.parentElement.parentElement.removeChild(this.parentElement);
        });
    }

    tasksDoneCounter.innerHTML = 'Tareas realizadas '+tareas.length;
    tasksDoneCounter.innerHTML = 'Tareas realizadas '+tareasRealizadas.length;
}
