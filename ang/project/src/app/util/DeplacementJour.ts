export class DeplacementJour {

  constructor(
    public nbKm: number,
    public montant: number,
    public jour: number,
    public type: number,
  ) {  }
  getNbKm(){
    return this.nbKm;
  }
  getMontant(){
    return this.montant;
  }
  getJour(){
    return this.jour;
  }
  getType(){
    return this.type;
  }
}
