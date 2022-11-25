export default class User {

    constructor(id, aluno, turma, l_pendente, entrega) {
        this._id = id;
        this._aluno = aluno
        this._turma = turma
        this._l_pendente = l_pendente
        this._entrega = entrega
    }
    getId() {
        return this._id;
    }
    getAluno() {
        return this._aluno;
    }
    getTurma() {
        return this._turma;
    }
    getL_Pendente() {
        return this.l_pendente;
    }
    getEntrega() {
        return this._entrega;
    }

}