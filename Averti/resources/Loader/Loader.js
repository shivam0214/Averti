import React, { Component } from 'react';
import Loader from 'react-loader-spinner';
const Loader =props=>{
	const{ promiseInProgress}= userPromiseTracker();
			return( promiseInProgress &&
		<div
		style={{
        width: "100%",
        height: "100",
        display: "flex",
        justifyContent: "center",
        alignItems: "center"
      }}>
		 <Loader type="Threedots" color="info" height="100" width="100"/>
		</div>
				)
	}
}


export default Loader;