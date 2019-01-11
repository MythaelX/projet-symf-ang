import { Component, OnInit } from '@angular/core';
import { HttpClient} from '@angular/common/http';
import { ActivatedRoute } from '@angular/router';
import { isNull } from 'util';


@Component({
  selector: 'app-deplacement-details',
  templateUrl: './deplacement-details.component.html',
  styleUrls: ['./deplacement-details.component.css']
})
export class DeplacementDetailsComponent implements OnInit {

  constructor(private httpClient: HttpClient, private route: ActivatedRoute){}

  list: any;
  deplacementId: string;
  ngOnInit() {
    this.httpClient.get('http://127.0.0.1:8000/api/getdeplacementdetails/' + this.route.snapshot.paramMap.get('userId') + '/' + this.route.snapshot.paramMap.get('year') + '/' + this.route.snapshot.paramMap.get('month'), {responseType: 'json'}).subscribe(
      (response) => {
        this.list = this.responseSanitizer(response);
      },
      (error) => {console.log('Erreur ! : ' + error);
      }
    );
    this.deplacementId=this.route.snapshot.paramMap.get('deplacementId');
  }

  responseSanitizer(list: any){
    list.forEach((element) => {
      if(isNull(element.date)){
        element.date = {date: new Date(null)};
      }

      if(isNull(element.created)){
        element.created = {date: new Date(null)};
      }

      if(isNull(element.updated)){
        element.updated = {date: new Date(null)};
      }
    });
    return list;
  }
}
