import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { Routes, RouterModule } from '@angular/router';
import { OktaAuthModule, OktaCallbackComponent } from '@okta/okta-angular';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { GameComponent } from './game/game.component';


const routes: Routes = [
    { path: '', component: HomeComponent, pathMatch: 'full' },
    { path: 'trivia', component: GameComponent },
    { path: '**', redirectTo: '', pathMatch: 'full' }
];
const oktaConfig = {
  issuer: '{YourIssuerURL}',
  redirectUri: 'http://localhost:4200/implicit/callback',
  clientId: '{yourClientId}'
};








@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    GameComponent
  ],

    imports: [
      BrowserModule,
      RouterModule.forRoot(routes)
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes),
    OktaAuthModule.initAuth(oktaConfig)
  ],





  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }







