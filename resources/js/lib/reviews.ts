/**
 * Customer reviews shown on the Welcome plan step. Empty until TradeHive Social
 * has real, permissioned customer reviews; never add reviews of other products.
 */
export interface Review {
    key: string;
    name: string;
    photo: string;
}

export const REVIEWS: Review[] = [];
