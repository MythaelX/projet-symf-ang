import { Component, OnInit } from '@angular/core';
import { HttpClient, HttpHeaders} from '@angular/common/http';
import { Router } from '@angular/router';
import {Deplacement} from '../util/Deplacement';



@Component({
  selector: 'app-form-deplacement',
  templateUrl: './form-deplacement.component.html',
  styleUrls: ['./form-deplacement.component.css']
})
export class FormDeplacementComponent implements OnInit {

  deplacement: Deplacement;
  constructor(private httpClient: HttpClient,private router: Router) { }

  ngOnInit() {
    this.deplacement=new Deplacement(0,0);
  }

  register() {
    console.log(this.deplacement);
    return this.httpClient.get('http://127.0.0.1:8000/api/setDeplacement/'+this.deplacement.getMois()+'/'+this.deplacement.getAnnee(), {responseType: 'json'}).subscribe(
       (response) => {
         console.log('ok');
         alert("Deplacement créé");
         this.router.navigate(['list'])
       },
       (error) => {console.log('Erreur ! : ' + error);
       }
     );
   }

}
