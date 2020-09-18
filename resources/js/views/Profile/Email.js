import React, { Component } from 'react';
import "./Addprofile.css";
import {Alert, Button, Card, CardBody, CardGroup, Col, Container, Form, Input, InputGroup, InputGroupAddon, InputGroupText, Row } from 'reactstrap';
class Email extends Component{
    constructor(props){
        super(props);
        this.state = {
            msg:false,
            loading:false,
            fields: {},
            errors: {},
            usertype:null
        };
        this.add = this.add.bind(this);

    }
    
    add(){
      
        this.setState({msg: !this.state.msg});
    }


    handleValidation(){
      let fields = this.state.fields;
      let errors = {};
      let formIsValid = true;

      if(!fields["email"]){
         formIsValid = false;
         errors["email"] = "Cannot be empty";
      }

      if(typeof fields["email"] !== "undefined"){
         let lastAtPos = fields["email"].lastIndexOf('@');
         let lastDotPos = fields["email"].lastIndexOf('.');

         if (!(lastAtPos < lastDotPos && lastAtPos > 0 && fields["email"].indexOf('@@') == -1 && lastDotPos > 2 && (fields["email"].length - lastDotPos) > 2)) {
            formIsValid = false;
            errors["email"] = "Email is not valid";
          }
     }  

     this.setState({errors: errors});
     return formIsValid;
 }
    contactSubmit(e){
      
      e.preventDefault();
      if(this.handleValidation()){
        this.setState({loading:true},()=>{

         var that = this;
        let fields = this.state.fields;
        var jsonData = {email:this.state.fields['email'],usertype:this.props.location.query.lang};
        axios.post('/api/email', jsonData)
        .then(function (res) {
            console.log("test",res.data);
            that.setState({loading:false}),
            that.setState({msg:!that.state.msg}),
            fields['message'] =res.data.message;   
            that.setState({fields});

        })
        .catch(function (error) {
            console.log(error);
        }); 
        })
        
      }else{
        
      }
  }
    handleChange(field, e){         
      let fields = this.state.fields;
      fields[field] = e.target.value;        
      this.setState({fields});
  }
    
    render(){
          const {loading} = this.state;   
        return <>
        <div className="maincont app flex-row align-items-center">
        <Container>
          <Row className="justify-content-center">
            <Col md="5">
              <CardGroup>
                <Card className="p-4">
                <CardBody>
                  <Form>
                  {
        this.state.msg
          ? 
              <Alert color="info">
               {this.state.fields['message']===undefined?null:this.state.fields['message']}
              </Alert>
          : null
      }
        <h1>Sign In</h1>
        <p className="text-muted">Please Verify your Email First</p>
        <InputGroup className="mb-3 ">
          <Input type="email" id="inpute" onChange={this.handleChange.bind(this, "email")} value={this.state.fields["email"]} placeholder="Email" autoComplete="off"/>
        </InputGroup>
        <span style={{color:"red"}}>{this.state.errors["email"]}</span>
        <Row>
          <Col xs="12" >
            <Button color="info" className="px-4" onClick={this.contactSubmit.bind(this)} disabled={loading}>Verify
                  { loading && <i className="fa fa-refresh fa-spin"></i>}
                  
            </Button>
          
          </Col>
                    </Row>
                  </Form>
                </CardBody>
                </Card>
              </CardGroup>
            </Col>
          </Row>
        </Container>
      </div>           
        </>
    }
}
export default Email;