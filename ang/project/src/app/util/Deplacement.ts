export class Deplacement {

  constructor(
    public annee: number,
    public mois: number,
  ) {  }
  getMois(){
    return this.mois;
  }
  getAnnee(){
    return this.annee;
  }
}
