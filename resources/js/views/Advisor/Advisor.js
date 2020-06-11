import React, { Component } from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import AdvisorDetails from '../Advisor/AdvisorDetails';
import AdvisorInfo from '../Advisor/AdvisorInfo';
import AdvisorTerms from '../Advisor/AdvisorTerms';
import AdvisorUsername from './AdvisorUsername';
import AdvisorIntro from '../AdvisorQuestions/AdvisorIntro';
import AdvisorWhat from '../AdvisorQuestions/AdvisorWhat';
import AdvisorAssets from '../AdvisorQuestions/AdvisorAssets';
import AdvisorRisk from '../AdvisorQuestions/AdvisorRisk';
import AdvisorWhen from '../AdvisorQuestions/AdvisorWhen';
import AdvisorWhy from '../AdvisorQuestions/AdvisorWhy';
import AdvisorWhere from '../AdvisorQuestions/AdvisorWhere';
import AdvisorSignup from './AdvisorSignup';


class Advisor extends Component{
    state={
        step:1,
        firstname:true,
        firstname:'',
    }
    nextStep = () => {
        const {step} = this.state;
        this.setState({
            step:step+1
        });
    }
    prvStep =() =>{
        const {step} =this. state;
        this.setState({
            step:step-1
        });
    }
    handleChange =input=>e =>{
        this.setState({[input]:e.target.value});
    }
render(){
    const { step } =this.state;
    const { firstname, lastname, email, city} =this.state;
    const values = { firstname, lastname, email,city}
    switch (step) {
        case 1:
            return(<AdvisorDetails
                nextStep={this.nextStep}
                prvStep={this.prvStep}
                handleChange={this.handleChange}
                values={values}
            />)    
        case 2:
                return(<AdvisorInfo
                    nextStep={this.nextStep}
                    prvStep={this.prvStep}
                    handleChange={this.handleChange}
                    values={values}
                />)
        
        case 3:
            return(<AdvisorUsername
                nextStep={this.nextStep}
                prvStep={this.prvStep}
                handleChange={this.handleChange}
                values={values}
            />)
                
        case 4:
                return(<AdvisorIntro
                    nextStep={this.nextStep}
                    prvStep={this.prvStep}
                    handleChange={this.handleChange}
                    values={values}
                />)                    
        case 5:
            return(<AdvisorWhat
                nextStep={this.nextStep}
                prvStep={this.prvStep}
                handleChange={this.handleChange}
                values={values}
            />)                    
            
        case 6:
            return(<AdvisorWhere
                nextStep={this.nextStep}
                prvStep={this.prvStep}
                handleChange={this.handleChange}
                values={values}
            />) 
        case 7:
            return(<AdvisorAssets
                nextStep={this.nextStep}
                prvStep={this.prvStep}
                handleChange={this.handleChange}
                values={values}
            />) 
                            
        case 8:
            return(<AdvisorRisk
                nextStep={this.nextStep}
                prvStep={this.prvStep}
                handleChange={this.handleChange}
                values={values}
            />) 
            
        case 9:
            return(<AdvisorWhen
                nextStep={this.nextStep}
                prvStep={this.prvStep}
                handleChange={this.handleChange}
                values={values}
            />)                    
        case 10:
            return(<AdvisorWhy
                nextStep={this.nextStep}
                prvStep={this.prvStep}
                handleChange={this.handleChange}
                values={values}
            />)                    
        case 11:
            return(<AdvisorTerms
                nextStep={this.nextStep}
                prvStep={this.prvStep}
                handleChange={this.handleChange}
                values={values}
            />)                    
                
        }
        
}
}
export default Advisor;