//////////////////////////////////////
// dbservice.ts
// @ Author Brian
////////////////////////////////////////

import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Router } from '@angular/router';

class Comments {
  reference: string;
  username: string;
  email: string;
  topic: string;
  comment: string;
  created: string;
  modified: string;
  likes: string;
}

@Injectable({
  providedIn: 'root'
})
export class DbService {
    /*
    pgApi: string = "http://127.0.0.1:8000/api/comments";
    */
    //*
    dataUrl: string = "./assets/prdata.json";
    //gApi: string = "http://127.0.0.1:8000";
    gApi: string = "http://127.0.0.1:8000/index";
    pApi: string = "http://127.0.0.1:8000/pcomments";
    //*/
    doneApi = false;
    headerOp;
    xbusket = "Online Comments:";
    ybusket;
    login = false;
    refn;
    comments: Comments = {
      reference: "",
      username: "",
      email: "",
      topic: "",
      comment: "",
      created: "",
      modified: "",
      likes: "",
    };
    token;
    constructor(private httpClient: HttpClient,
      private router: Router) {
      this.headerOp = new HttpHeaders();
      this.headerOp.append('Content-Type', 'application/json');
    }

    getComments(){
        alert(this.gApi);
        return this.httpClient.get(this.gApi);
    }

    getCommentsX(){
        alert(this.dataUrl);
        return this.httpClient.get(this.dataUrl);
    }

    getCommentDate(){
        return new Date();
    }

    postComments(data){
      return this.httpClient.post(this.pApi+"?data="+data, this.headerOp);
    }

}
