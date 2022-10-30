import User from "./models/usuario.js";

export default class UsuarioControle {
    constructor() {
        console.log('UsuarioControle.js foi iniciado');
        this.addEventBtns();
    }
    addLine(User) {
        let tr = document.createElement('tr');
        tr.innerHTML = `<td class='table-aluno'>${user.getAluno()}</td>
        <td class='table-Turma'>'>${user.getTurma()}</td>
        <td class='table-l_pendente'>'>${user.getL_Pendente()}</td>
        <td class='table-entrega'>'>${user.getEntrega()}</td>
        <td class='table-admin'>'>${user.getDate()}</td>`;

        document.querySelector('.users tbody').appendChild(tr);

    }
    register() {
        let formL = document.querySelector('.registro')
        let elements = formL.elements;
        let user;

        if (JSON.stringify(this.users) == JSON.stringify({})) { // this.users is undefined
            user = new User(0, elements.aluno.value, elements.turma.value, elements.l_pendente.value, elements.entrega.value)
        } else {
            const lastUser = new User(0, "Default User", "0000007", "Matilda", '07/03/2022');

            user = new User(lastUser.getId() + 1, elements.aluno.value, elements.turma.value, elements.l_pendente.value, elements.entrega.value)
        }

        console.log(user)
    }

    addEventBtns() {
        click_me.addEventListener('click', () => {
            document.querySelector('.form-add').style.display = 'flex'
            document.querySelector('.menu').style.display = 'none'
        })
        remove.addEventListener('click', () => {
            document.querySelector('.menu').style.display = 'inline'
            document.querySelector('.form-add').style.display = 'none'
        })
        registerBtn.addEventListener('click', () => {
            this.register()
        })
    }
}