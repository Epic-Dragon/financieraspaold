<template>
  <v-list dense>
    <v-list-item dark to="/">
      <v-list-item-action>
        <v-icon>mdi-home</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Home</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
    <v-list-item dark to="/about">
      <v-list-item-action>
        <v-icon>mdi-information</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>About</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
    <v-list-item dark to="/clients">
      <v-list-item-action>
        <v-icon>mdi-account-cash</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Clientes</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
    <v-list-item dark to="/user-edit">
      <v-list-item-action>
        <v-icon>mdi-account-edit</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Usuario</v-list-item-title>
      </v-list-item-content>
    </v-list-item>    
    <v-list-item dark to="/loans">
      <v-list-item-action>
        <v-icon>mdi-currency-usd</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Préstamos</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
    <v-list-item dark to="/payments">
      <v-list-item-action>
        <v-icon>mdi-credit-card-plus</v-icon>
      </v-list-item-action>
      <v-list-item-content>
        <v-list-item-title>Pagos</v-list-item-title>
      </v-list-item-content>
    </v-list-item>
  </v-list>
</template>